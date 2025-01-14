<?php

namespace mohammadbay\sitemanager\Services;

use Illuminate\Support\Facades\DB;
use mohammadbay\sitemanager\Http\Repositories\ComponentTypeRepository;
use mohammadbay\sitemanager\Http\Requests\Component\ValidateComponentRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class ComponentTypeService
{
    public function __construct(public ComponentTypeRepository $repository)
    {
    }


}
