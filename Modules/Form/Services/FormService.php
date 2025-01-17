<?php

namespace Modules\Form\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Form\App\Http\Repositories\FormRepository;
use Modules\Form\App\Requests\Form\ValidateFormRequest;
use Yajra\DataTables\Facades\DataTables;

class FormService
{
    public function __construct(public FormRepository $repository)
    {
    }


    public function list(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $this->repository->all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a class="m-1 update_tag" data-url="'.route('admin_form_detail',$row->id).'"><i class="text-primary fa fa-edit"></i></a>
                        <a class="delete_tag" data-url="'.route('admin_form_delete',$row->id).'"><i class="text-danger fa fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function detail($id)
    {
        return $this->repository->find($id) ?? throw new \Exception(trans("custom.defaults.not_found"));
    }

    public function storeOrUpdate(ValidateFormRequest $request): void
    {
        $inputs = $request->validated();
        if ($inputs['action'] == 'create') {
            $hasRecord = $this->repository->findBy('title', $inputs['title']);
            if ($hasRecord) {
                throw new \Exception(trans("custom.defaults.repetitive"));
            }
            DB::beginTransaction();
            try {
                unset($inputs['action']);
                $this->repository->create($inputs);
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
            $this->repository->delete($record);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception(trans("custom.defaults.failed"));
        }
    }
}
