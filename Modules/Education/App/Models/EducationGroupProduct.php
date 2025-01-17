<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EducationGroupProduct extends Model
{
    use HasFactory;
    protected $fillable = ['groupId','productId'];
}
