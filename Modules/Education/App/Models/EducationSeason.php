<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EducationSeason extends Model
{
    use SoftDeletes;
    protected $table = "education_seasons";

    protected $fillable = ['title','subject','productId'];

    protected $with = ['lessons'];

    public function lessons()
    {
        return $this->hasMany(EducationLesson::class,'seasonId');
    }
}
