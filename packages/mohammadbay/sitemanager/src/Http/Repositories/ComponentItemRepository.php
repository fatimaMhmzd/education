<?php

namespace mohammadbay\sitemanager\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use mohammadbay\sitemanager\Models\AdminComponentItem;

class ComponentItemRepository extends BaseRepository
{

    public function model(): string
    {
        return AdminComponentItem::class;
    }

    public function relations(): array
    {
        return AdminComponentItem::$relationItems;
    }
}
