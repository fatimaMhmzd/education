<?php

namespace Modules\Education\App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use Modules\Education\App\Models\EducationGroup;

class EducationGroupRepository extends BaseRepository
{

    public function model(): string
    {
        return EducationGroup::class;
    }

    public function relations(): array
    {
        return [];
    }
}
