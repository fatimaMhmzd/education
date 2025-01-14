<?php

namespace mohammadbay\sitemanager\Http\Controllers;

use App\Helper\Response\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mohammadbay\sitemanager\Http\Requests\Component\ValidateComponentRequest;
use mohammadbay\sitemanager\Services\ComponentService;

class ComponentController extends Controller
{

    public function __construct(public ComponentService $service)
    {
    }
    public function index()
    {
        $data = $this->service->index();
        return view('sitemanager::dashboard.components.index',compact('data'));
    }

    public function list(Request $request): \Illuminate\Http\JsonResponse
    {
        return $this->service->list($request);
    }

    public function detail($id)
    {
        try {
            return ResponseHelper::responseSuccess($this->service->detail($id));
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseHelper::responseCustomError($message);
        }
    }

    public function storeOrUpdate(ValidateComponentRequest $request): \Illuminate\Http\JsonResponse
    {
        try {
            $this->service->storeOrUpdate($request);
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
