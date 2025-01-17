<?php

namespace Modules\ChunkUpload\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\ChunkUpload\Service\ChunkService;
use Modules\Setting\Entities\SettingBase;

class ChunkUploadController extends Controller
{

    /*public function __construct(public ChunkService $service)
    {
    }*/

    public function index()
    {
        $setting = SettingBase::query()->find(6);
        return view('chunkupload::index',compact('setting'));
    }
    public function upload(Request $request)
    {
        $chunkService = resolve(ChunkService::class);
      return  $chunkService->upload($request);
    }

}
