<?php

namespace mohammadbay\sitemanager\Http\Controllers;

use App\Helper\Response\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mohammadbay\sitemanager\Http\Requests\Module\ValidateModuleRequest;
use mohammadbay\sitemanager\Services\ModuleService;

class ModuleController extends Controller
{
    public function __construct(public ModuleService $service)
    {
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('sitemanager::dashboard.modules.index');
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

    public function storeOrUpdate(ValidateModuleRequest $request): \Illuminate\Http\JsonResponse
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
