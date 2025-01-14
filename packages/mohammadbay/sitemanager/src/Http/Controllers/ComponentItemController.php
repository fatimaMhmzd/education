<?php

namespace mohammadbay\sitemanager\Http\Controllers;

use App\Helper\Response\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use mohammadbay\sitemanager\Models\AdminComponent;
use mohammadbay\sitemanager\Models\AdminComponentItem;
use mohammadbay\sitemanager\Models\AdminComponentType;
use mohammadbay\sitemanager\Services\ComponentItemService;
use mohammadbay\sitemanager\Services\ComponentService;

class ComponentItemController extends Controller
{
    public function __construct(public ComponentItemService $service)
    {
    }

    public function index($id)
    {
        $data = $this->service->index($id);
        return view('sitemanager::dashboard.components.item.index', compact('id', 'data'));
    }

    public function store(Request $request, $id)
    {
        try {
            $this->service->store($request, $id);
            return ResponseHelper::responseSuccess(message: trans('custom.defaults.success'));
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseHelper::responseCustomError($message);
        }
    }


    public function generateCode($id)
    {
        return $this->service->generateCode($id);
        try {
            $this->service->generateCode($id);
            return ResponseHelper::responseSuccess(message: trans('custom.defaults.success'));
        }catch (\Exception $exception){
//            Log::info(['ereeeeeeeee'=>$exception]);
            $message = $exception->getMessage();
            return ResponseHelper::responseCustomError($message);
        }
    }

}
