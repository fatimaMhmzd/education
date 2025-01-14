<?php

namespace mohammadbay\sitemanager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property $id
 * @property $title
 * @property $type
 *
 * */
class AdminComponentType extends Model
{
    use SoftDeletes;

    protected $table = 'admin_component_types';
    protected $fillable = ['title','type'];
    public static $relationItems= [];

    protected $casts = [
        'title' => 'string',
        'type' => 'string',
    ];
}
