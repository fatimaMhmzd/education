<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EducationProductItem extends Model
{
    use HasFactory;

    protected $fillable = ['text','netType','product_id','url','title','type','preview','titlee','description'];
}
