<?php

namespace Modules\Form\App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use Modules\Form\App\Models\Form;

class FormRepository extends BaseRepository
{

    public function model(): string
    {
       return Form::class;
    }

    public function relations(): array
    {
        return [];
    }
}
