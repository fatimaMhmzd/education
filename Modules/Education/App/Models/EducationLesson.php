<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EducationLesson extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','subject','seasonId'];


    protected $with = ['uploaditem'];

    public function uploaditem()
    {
        return $this->hasMany(EducationProductItem::class,'product_id');
    }
}
