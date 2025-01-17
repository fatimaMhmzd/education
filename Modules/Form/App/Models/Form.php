<?php

namespace Modules\Form\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Form\Database\factories\FormFactory;

/**
 *
 * @property $id
 * @property $title
 * @property $url
 * @property $description
 * @property $price1
 * @property $price2
 *
 */
class Form extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','url','description','price1','price2'];

    protected $casts = [
        'price1' => 'integer',
        'price2' => 'integer',
        'title' => 'string',
        'url' => 'string',
        'description' => 'string',
    ];
}
