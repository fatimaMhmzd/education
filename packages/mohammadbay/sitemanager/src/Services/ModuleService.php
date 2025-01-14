<?php

namespace mohammadbay\sitemanager\Services;

use App\Helper\Response\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use mohammadbay\sitemanager\Http\Repositories\ModuleRepository;
use mohammadbay\sitemanager\Http\Requests\Module\ValidateModuleRequest;
use Yajra\DataTables\Facades\DataTables;

class ModuleService
{
    public function __construct(public ModuleRepository $repository)
    {
    }

    public function list(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $this->repository->all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a class="m-1 update_tag" data-url="'.route('site_manager_admin_modules_delete',$row->id).'"><i class="text-primary fa fa-edit"></i></a>
                        <a class="delete_tag" data-url="'.route('site_manager_admin_modules_delete',$row->id).'"><i class="text-danger fa fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function detail($id)
    {
        return $this->repository->find($id) ?? throw new \Exception(trans("custom.defaults.not_found"));
    }

    public function storeOrUpdate(ValidateModuleRequest $request): void
    {
        $inputs = $request->validated();
        if ($inputs['action'] == 'create') {
            $hasRecord = $this->repository->findBy('name', $inputs['name']);
            if ($hasRecord) {
                throw new \Exception(trans("custom.defaults.repetitive"));
            }
            DB::beginTransaction();
            try {
                unset($inputs['action']);
                $this->repository->create($inputs);
                $this->createCommand($inputs['name']);
                DB::commit();
            } catch (\Exception $exception) {
                DB::rollBack();
                throw new \Exception(trans("custom.defaults.failed"));
            }
        } else {
            DB::beginTransaction();
            try {
                unset($inputs['action']);
                $oldRecord = $this->repository->findOrFail($inputs['id']);
                if($oldRecord->name != $inputs['name']){
                    $this->updateCommand($oldRecord->name,$inputs['name']);
                }
                $this->repository->updateById($inputs);
                DB::commit();
            } catch (\Exception $exception) {
                DB::rollBack();
                throw new \Exception(trans("custom.defaults.failed"));
            }
        }
    }

    public function delete($id): void
    {
        $record = $this->repository->find($id);
        if (!$record) {
            throw new \Exception(trans("custom.defaults.not_found"));
        }

        DB::beginTransaction();
        try {
            $this->deleteCommand($record->name);
            $this->repository->delete($record);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception(trans("custom.defaults.failed"));
        }
    }

    public function all(){
        return $this->repository->all();
    }


    /*commands*/
    public function createCommand($moduleName)
    {
        Artisan::call('module:make-custom', [
            'name' => $moduleName
        ]);
    }
    public function deleteCommand($moduleName)
    {
        Artisan::call('module:delete', [
            'name' => $moduleName
        ]);
    }

    public function updateCommand($oldName,$newName)
    {
        Artisan::call('module:rename', [
            'oldName' => $oldName,
            'newName' => $newName,
        ]);
    }
}
