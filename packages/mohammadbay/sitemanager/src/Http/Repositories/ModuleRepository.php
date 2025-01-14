<?php

namespace mohammadbay\sitemanager\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use mohammadbay\sitemanager\Models\AdminModule;

class ModuleRepository extends BaseRepository
{

    public function model(): string
    {
        return AdminModule::class;
    }

    public function relations(): array
    {
        return AdminModule::$relationItems;
    }
}
