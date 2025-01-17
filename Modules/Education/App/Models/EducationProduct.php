<?php

namespace Modules\Education\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EducationProduct extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $appends = ['users','permissions','userIds'];

    public function groups()
    {
        return $this->belongsToMany(EducationGroup::class, "education_group_products", "productId", "groupId");
    }

    public function master()
    {
        return $this->belongsTo(EducationMaster::class,"masterId",'id');
    }

    /*public function qas()
    {
        return $this->hasMany(EducationQa::class,'productId');
    }*/

    public function season()
    {
        return $this->hasMany(EducationSeason::class,'productId');
    }


    public function types()
    {
        return $this->hasMany(EducationProductUserType::class,'productId');
    }



    public function getUsersAttribute()
    {
        return EducationProductUserType::where('productId',$this->id)->get();
    }

    public function getUserIdsAttribute()
    {
        return EducationProductUserType::where('productId',$this->id)->pluck('typeId')->toArray();
    }

    public function getPermissionsAttribute()
    {
        return EducationProductUserPermission::where('productId',$this->id)->get();
    }


    public function scopePublishProduct($query)
    {
        return $query->where('status',2);
    }

}
