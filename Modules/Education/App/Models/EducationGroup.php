<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class EducationGroup extends Model
{
    protected $casts = [
        'slug' => 'string',
        'title' => 'string',
    ];
    use SoftDeletes;

    protected $dates = ['deleted_at','create_at','updated_at'];

    

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'slug',
        'title',
    ];
    
    
}
