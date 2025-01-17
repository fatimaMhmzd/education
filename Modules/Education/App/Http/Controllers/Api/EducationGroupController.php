<?php

namespace Modules\Education\App\Http\Controllers\Api;

use App\Helper\Response\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Education\App\Http\Requests\EducationGroup\ValidateEducationGroupRequest;
use Modules\Education\Services\EducationGroupService;

class EducationGroupController extends Controller
{
    public function __construct(public EducationGroupService $service)
    {
    }

    public function index(Request $request)
    {
        $data = $this->service->index($request);
        return view('education::admin.group.index',compact('data'));
    }

    public function list(Request $request): \Illuminate\Http\JsonResponse
    {
        return $this->service->list($request);
    }

    public function detail($id)
    {
        try {
            return ResponseHelper::responseSuccess($this->service->find($id));
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseHelper::responseCustomError($message);
        }
    }

    public function storeOrUpdate(ValidateEducationGroupRequest $request): \Illuminate\Http\JsonResponse
    {
        try {
            $this->service->storeOrUpdate($request);
            return ResponseHelper::responseSuccess(message: trans('custom.defaults.success'));
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseHelper::responseCustomError($message);
        }
    }
    public function store(ValidateEducationGroupRequest $request): \Illuminate\Http\JsonResponse
    {
        try {
            $this->service->store($request);
            return ResponseHelper::responseSuccess(message: trans('custom.defaults.success'));
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseHelper::responseCustomError($message);
        }
    }
    public function update(ValidateEducationGroupRequest $request,$id): \Illuminate\Http\JsonResponse
    {
        try {
            $this->service->update($request,$id);
            return ResponseHelper::responseSuccess(message: trans('custom.defaults.success'));
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseHelper::responseCustomError($message);
        }
    }

    public function delete($id): \Illuminate\Http\JsonResponse
    {
        try {
            $this->service->delete($id);
            return ResponseHelper::responseSuccess(message: trans('custom.defaults.success'));
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseHelper::responseCustomError($message);
        }
    }
}
