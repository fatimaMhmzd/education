<?php

namespace mohammadbay\sitemanager\Services;

use mohammadbay\sitemanager\Http\Repositories\AdminComponentTypeRepository;

class AdminComponentTypeService
{
    public function __construct(public AdminComponentTypeRepository $repository)
    {
    }

    public function all()
    {
        return $this->repository->all();
    }

}
