<?php

namespace mohammadbay\sitemanager\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use mohammadbay\sitemanager\Models\AdminComponent;

class ComponentRepository extends BaseRepository
{

    public function model(): string
    {
        return AdminComponent::class;
    }

    public function relations(): array
    {
        return AdminComponent::$relationItems;
    }
}
