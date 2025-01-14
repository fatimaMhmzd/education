<?php

namespace mohammadbay\sitemanager\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $component_id
 * @property $title
 * @property $name
 * @property $type_id
 * @property $required
 * @property $max
 * @property $active
 * @property $relation_component_id
 * @property $relation_type
 *
 * */
class AdminComponentItem extends Model
{
    protected $table = 'admin_component_items';
    protected $fillable = ['component_id','title','in_list','name','type_id','required','max','active','relation_component_id','relation_type'];
    public static $relationItems= ['type'];
    protected $casts = [
        'component_id' => 'integer',
        'title' => 'string',
        'name' => 'string',
        'type_id' => 'integer',
        'required' => 'boolean',
        'in_list' => 'boolean',
        'max' => 'integer',
        'active' => 'boolean',
        'relation_component_id' => 'integer',
        'relation_type' => 'string'
    ];

    public function type()
    {
        return $this->belongsTo(AdminComponentType::class,'type_id','id')->select(['id','title','type']);
    }

   /* const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const STATUS_PENDING = 2;

    public static function getStatusOptions()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_INACTIVE => 'Inactive',
            self::STATUS_PENDING => 'Pending',
        ];
    }*/
}
