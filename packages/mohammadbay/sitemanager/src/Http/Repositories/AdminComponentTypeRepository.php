<?php

namespace mohammadbay\sitemanager\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use mohammadbay\sitemanager\Models\AdminComponent;
use mohammadbay\sitemanager\Models\AdminComponentType;

class AdminComponentTypeRepository extends BaseRepository
{

    public function model(): string
    {
        return AdminComponentType::class;
    }

    public function relations(): array
    {
        return AdminComponentType::$relationItems;
    }
}
