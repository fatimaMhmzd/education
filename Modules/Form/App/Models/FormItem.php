<?php

namespace Modules\Form\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Form\Database\factories\FormItemFactory;

class FormItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): FormItemFactory
    {
        //return FormItemFactory::new();
    }
}
