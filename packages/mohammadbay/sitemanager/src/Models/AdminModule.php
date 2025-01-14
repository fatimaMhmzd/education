<?php

namespace mohammadbay\sitemanager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 *
 * @property $id
 * @property $title
 * @property $name
 * @property $active
 *
 */
class AdminModule extends Model
{
    use SoftDeletes;

    protected $table = 'admin_modules';
    protected $fillable = ['title', 'name', 'active'];
    public static $relationItems = ['components'];

    public function components()
    {
        return $this->hasMany(AdminComponent::class,'module_id','id');
    }

    protected $casts = [
        'title' => 'string',
        'name' => 'string',
        'active' => 'integer',
    ];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public static function getStatusOptions()
    {
        return [
            self::STATUS_ACTIVE => 'فعال',
            self::STATUS_INACTIVE => 'غیرفعال'
        ];
    }
}
