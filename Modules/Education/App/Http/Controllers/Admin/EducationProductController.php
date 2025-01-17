<?php

namespace Modules\Education\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Modules\Education\App\Models\EducationGroup;
use Modules\Education\App\Models\EducationMaster;
use Modules\Education\App\Models\EducationProduct;
use Modules\Education\App\Models\EducationProductUserPermission;
use Modules\Education\App\Models\EducationProductUserType;
use Modules\Education\App\Models\EducationType;
use Yajra\DataTables\Facades\DataTables;

class EducationProductController extends Controller
{
    public function add()
    {
        $types = EducationType::all();
        $groups = EducationGroup::all();
        return view('education::admin.product.add', compact('types', 'groups'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'groupId' => 'required',
            'description' => 'required',
            'image' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
            'groupId.required' => 'گروه الزامی است',
            'description.required' => 'توضیحات الزامی است',
            'image.required' => 'عکس الزامی است',
        ]);


        $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('educationProductImage'), $imageName);
        $imageAddres = url('/') . '/' . 'educationProductImage' . '/' . $imageName;


        $productId = EducationProduct::create([
            'creatorId' => Auth::id() ?? 0,
            'groupId' => $request->groupId,
            'title' => $request->title,
            'image' => $imageAddres,
            'description' => $request->description,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
            'properties' => $request->properties,
            'appropriate' => $request->appropriate,
        ])->id;
if ($request->input('userType')){
        foreach ($request->userType as $item) {
            EducationProductUserType::create([
                "productId" => $productId,
                "typeId" => $item,
            ]);
        }
}
        if ($request->input('permission')){
        foreach ($request->permission as $item) {
            EducationProductUserPermission::create([
                "productId" => $productId,
                "permissionId" => $item,
            ]);
        }
        }

        return view('education::admin.product.list')->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }


    public function list()
    {
        return view('education::admin.product.list');
    }

    public function ajax()
    {

        $data = EducationProduct::all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('admin_education_product_delete', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('admin_education_product_update', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>
<a href="' . route('admin_education_product_changeStatus', $row->id) . '" class="btn btn-success">تغییر وضعیت دوره</a>
<a href="' . route('admin_education_session_add', $row->id) . '" class="btn btn-success">افزودن فصل</a>
<a href="' . route('admin_education_session_list', $row->id) . '" class="btn btn-success">لیست فصل ها</a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        EducationProduct::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $educationProduct = EducationProduct::find($id);
        $masters = EducationMaster::all();
        $types = EducationType::all();
        $groups = EducationGroup::all();
        return view('education::admin.product.update', compact('educationProduct','masters','types'));


    }
    public function changeStatus($id)
    {
        $educationProduct = EducationProduct::find($id);
        return view('education::admin.product.changeStatus', compact('educationProduct'));
    }
    public function storeChangeStatus(Request $request)
    {
        EducationProduct::query()->where('id',$request->id)->update([
            'status'=>$request->status
        ]);
        return view('education::admin.product.list')->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

    public function uploadView($id)
    {
        $educationProduct = EducationProduct::find($id);
        return view('education::admin.product.upload', compact('educationProduct','id'));
    }

    public function storeUpdate(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
        ]);

        $imageAddres = EducationProduct::find($request->id)->image;

        if ($request->image != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('educationProductImage'), $imageName);
            $imageAddres = url('/') . '/' . 'educationProductImage' . '/' . $imageName;
        }

        EducationProduct::where('id', $request->id)->update([
            'masterId' => $request->masterId,
            'typeId' => $request->typeId,
            'title' => $request->title,
            'image' => $imageAddres,
            'description' => $request->description,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
        ]);

        return view('education::admin.product.list')->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }


    /**
     * Handles the file upload
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws UploadMissingFileException
     * @throws \Pion\Laravel\ChunkUpload\Exceptions\UploadFailedException
     */
    public function upload(Request $request)
    {
        // create the file receiver
        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));
        // check if the upload is success, throw exception or return response you need
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }
        // receive the file
        $save = $receiver->receive();
        // check if the upload has finished (in chunk mode it will send smaller files)
        if ($save->isFinished()) {
            // save the file and return any response you need, current example uses `move` function. If you are
            // not using move, you need to manually delete the file by unlink($save->getFile()->getPathname())
            return $this->saveFile($save->getFile(), $request);
        }
        // we are in chunk mode, lets send the current progress
        /** @var AbstractHandler $handler */
        $handler = $save->handler();
        return response()->json([
            "done" => $handler->getPercentageDone(),
            'status' => true
        ]);
    }

    /**
     * Saves the file to S3 server
     *
     * @param UploadedFile $file
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function saveFileToS3($file)
    {
        $fileName = $this->createFilename($file);
        $disk = Storage::disk('s3');
        // It's better to use streaming Streaming (laravel 5.4+)
        $disk->putFileAs('photos', $file, $fileName);
        // for older laravel
        // $disk->put($fileName, file_get_contents($file), 'public');
        $mime = str_replace('/', '-', $file->getMimeType());
        // We need to delete the file when uploaded to s3
        unlink($file->getPathname());
        return response()->json([
            'path' => $disk->url($fileName),
            'name' => $fileName,
            'mime_type' => $mime
        ]);
    }

    /**
     * Saves the file
     *
     * @param UploadedFile $file
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function saveFile(UploadedFile $file, $request)
    {
        $fileName = $this->createFilename($file);
        // Group files by mime type
        $mime = str_replace('/', '-', $file->getMimeType());
        $dateFolder = date("Y-m-W");
        $filePath = "upload/{$mime}/{$dateFolder}/";
        $finalPath = public_path("app/" . $filePath);
        $file->move($finalPath, $fileName);

        EducationProductItem::create([
            'product_id' => $request->productId,
            'url' => "app/" . $filePath,
            'title' => $fileName,
            'type' => $mime,
            'preview' => '0',
        ]);

        return response()->json([
            'path' => $filePath,
            'name' => $fileName,
            'mime_type' => $mime
        ]);
    }

    /**
     * Create unique filename for uploaded file
     * @param UploadedFile $file
     * @return string
     */
    protected function createFilename(UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = str_replace("." . $extension, "", $file->getClientOriginalName()); // Filename without extension
        // Add timestamp hash to name of the file
        $filename .= "_" . md5(time()) . "." . $extension;
        return $filename;
    }


    public function deleteUpload($id)
    {
        $uploadData = EducationProductItem::find($id);
        $fileAddres = $uploadData->url . $uploadData->title;
        if (File::exists($fileAddres)) {
            File::delete($fileAddres);
            $uploadData->delete();
        }
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }
}
