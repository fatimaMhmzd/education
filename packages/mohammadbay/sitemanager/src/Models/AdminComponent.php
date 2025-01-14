<?php

namespace mohammadbay\sitemanager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @property $id
 * @property $title
 * @property $name
 * @property $module_id
 * @property $is_active
 * @property $soft_delete
 *
 * */
class AdminComponent extends Model
{
    use SoftDeletes;

    protected $table = 'admin_components';
    protected $fillable = ['title','name','module_id','is_active','soft_delete','url'];

    public static $relationItems = ['module'];

    protected $casts = [
        'title' => 'string',
        'name' => 'string',
        'url' => 'string',
        'module_id' => 'integer',
        'is_active' => 'integer',
        'soft_delete' => 'integer',
    ];

    public function module()
    {
        return $this->belongsTo(AdminModule::class,'module_id','id')->select(['id','title','name']);
    }

}
