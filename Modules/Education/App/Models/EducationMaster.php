<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class EducationMaster extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

}
