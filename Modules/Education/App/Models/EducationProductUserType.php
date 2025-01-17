<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Education\Database\factories\EducationProductUserTypeFactory;

class EducationProductUserType extends Model
{
    use SoftDeletes;

    protected $fillable = ['productId','typeId'];
}
