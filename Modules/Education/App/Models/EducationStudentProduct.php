<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Education\Database\factories\EducationStudentProductFactory;

class EducationStudentProduct extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}
