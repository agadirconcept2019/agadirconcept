<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaAsset extends Model
{
    protected $fillable = [
        'file_name',
        'file_path',
        'media_type',
        'mime_type',
        'size_bytes',
        'alt_text',
        'title',
        'caption',
    ];
}
