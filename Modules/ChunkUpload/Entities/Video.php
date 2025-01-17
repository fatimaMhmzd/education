<?php

namespace Modules\ChunkUpload\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Video extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'videos';
    protected $fillable = [
        'id',
        'title',
        'original_name',
        'video',
        'type',
        'url',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [];

    protected $casts = [
        'title' => 'string',
        'original_name' => 'string',
        'video' => 'string',
        'type' => 'string',
        'user_creator_id' => 'integer',
        'user_editor' => 'integer',
        'status' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];

    public function videoable(): MorphTo
    {
        return $this->morphTo();
    }
}
