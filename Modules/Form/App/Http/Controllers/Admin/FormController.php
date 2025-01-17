<?php

namespace Modules\Form\App\Http\Controllers\Admin;

use App\Helper\Response\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Form\App\Requests\Form\ValidateFormRequest;
use Modules\Form\Services\FormService;

class FormController extends Controller
{
    public function __construct(public FormService $service)
    {
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('form::form.dashboard.index');
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

    public function storeOrUpdate(ValidateFormRequest $request): \Illuminate\Http\JsonResponse
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
