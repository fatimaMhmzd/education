<?php

namespace Modules\Education\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

use Modules\Education\App\Http\Repositories\EducationGroupRepository;
use Modules\Education\App\Http\Requests\EducationGroup\ValidateEducationGroupRequest;
use Modules\Education\App\Http\Requests\EducationGroup\ValidateDeleteRequest;


class EducationGroupService
{
    public function __construct(public EducationGroupRepository $repository)
    {
    }

    public function index($request): array
    {
        $filter = removeUnnecessaryFilter($request);
        $result = $this->repository->resolve_paginate(inputs: $filter, relations: ['keyItems'])->toArray();
        return ["result" => $result, "paginate" => isset($result["per_page"]) || isset($result["perPage"])];
    }

    public function find($id): mixed
    {
        return $this->repository->find($id);
    }

     public function ajax(Request $request): \Illuminate\Http\JsonResponse
        {
            $data = $this->repository->all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a class="m-1 update_tag" data-url="'.route('admin_education_education_group_detail',$row->id).'"><i class="text-primary fa fa-edit"></i></a>
                            <a class="delete_tag" data-url="'.route('admin_education_education_group_delete',$row->id).'"><i class="text-danger fa fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make();
        }

    public function storeOrUpdate(ValidateEducationGroupRequest $request): void
        {
            $inputs = $request->validated();
            if ($inputs['action'] == 'create') {
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
                    $this->repository->updateById($inputs);
                    DB::commit();
                } catch (\Exception $exception) {
                    DB::rollBack();
                    throw new \Exception(trans("custom.defaults.failed"));
                }
            }
        }

    public function store(ValidateEducationGroupRequest $request): mixed
    {
        $inputs = $request->validated();

        DB::beginTransaction();
        try {
            $data = $this->repository->create($inputs);
            DB::commit();
            return $data;
        } catch (Exception) {
            DB::rollBack();
            throw new Exception(trans("custom.defaults.store_failed"));
        }
    }

    public function update(ValidateEducationGroupRequest $request, $id): mixed
    {
        $inputs = $request->validated();
        $data = $this->repository->find($id);
        if ($data) {
            DB::beginTransaction();
            try {
                $data = $this->repository->update($data, $inputs);
                DB::commit();
                return $data;
            } catch (Exception) {
                DB::rollBack();
                throw new Exception(trans("custom.defaults.update_failed"));
            }
        } else {
            throw new Exception(trans("custom.defaults.not_found"));
        }
    }

    public function delete($id): mixed
    {
        DB::beginTransaction();
        $item = $this->repository->find($id);
        if ($data) {
            try {
                $item = $this->repository->find($id);
                $itemDeleted = $this->repository->delete($item);
                DB::commit();
                return $itemDeleted;
            } catch (Exception) {
                DB::rollBack();
                throw new Exception(trans("custom.defaults.delete_failed"));
            }
        }else{
            throw new Exception(trans("custom.defaults.not_found"));
        }
    }

    public function deletes(ValidateDeleteRequest $request): mixed
    {
        $data = $request->validated();
        $ids = $data['ids'] ?? [];
        DB::beginTransaction();
        try {
            $items = $this->repository->byArray(values: $ids);
            $itemDeleted = $this->repository->delete($items);
            DB::commit();
            return $itemDeleted;
        } catch (Exception) {
            DB::rollBack();
            throw new Exception(trans("custom.defaults.delete_failed"));
        }
    }
}
