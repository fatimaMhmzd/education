<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Education\Database\factories\EducationTypeFactory;

class EducationType extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

}
