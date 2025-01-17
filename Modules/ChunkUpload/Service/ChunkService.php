<?php

namespace Modules\ChunkUpload\Service;


use App\Exceptions\Contracts\DeveloperException;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\AbstractHandler;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class ChunkService
{

    public function upload(Request $request, Model $model)
    {
        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }
        $save = $receiver->receive();
        if ($save->isFinished()) {
            return $this->saveFile($save->getFile(), $request,$model);
        }

        $handler = $save->handler();
        return response()->json([
            "done" => $handler->getPercentageDone(),
            "end" => false,
            'status' => true
        ]);
    }


    protected function saveFileToS3($file)
    {
        $fileName = $this->createFilename($file);
        $disk = Storage::disk('s3');
        $disk->putFileAs('photos', $file, $fileName);
        $mime = str_replace('/', '-', $file->getMimeType());
        unlink($file->getPathname());

        return response()->json([
            'path' => $disk->url($fileName),
            'name' => $fileName,
            'mime_type' => $mime
        ]);
    }


    protected function saveFile(UploadedFile $file, $request ,$model)
    {
        $fileName = $this->createFilename($file);

        $mime = str_replace('/', '-', $file->getMimeType());
        $dateFolder = date("Y-m-W");
        $filePath = "upload/{$mime}/{$dateFolder}/";
        $finalPath = storage_path("app/public/" . $filePath);
        $file->move($finalPath, $fileName);
        $this->saveVideo("/storage/$filePath",$mime,$model,$fileName);
        return response()->json([
            'path' => $filePath,
            "end" => true,
            'name' => $fileName,
            'mime_type' => $mime
        ]);
    }


    protected function createFilename(UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = str_replace("." . $extension, "", $file->getClientOriginalName()); // Filename without extension
        $filename .= "_" . md5(time()) . "." . $extension;
        return $filename;
    }

    public static function saveVideo(
        $url,
        $mime,
        Model $model,
        string $title = null,
        $destinationPath = null
    )
    {
        DB::beginTransaction();
        try {

            # save video model
            $data = [
                'title' => $title ?? null,
                'original_name' => $title,
                'video' => $title,
                'type' => $mime,
                'url' => $url.$title,
            ];
            if (method_exists($model, 'video')) {
                $model->video()->create($data);
            } elseif (method_exists($model, 'videos')) {
                $model->videos()->create($data);
            } else {
                throw new DeveloperException(message: 'function video or videos not set in model');
            }
            DB::commit();
            return true;
        } catch (Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }

}
