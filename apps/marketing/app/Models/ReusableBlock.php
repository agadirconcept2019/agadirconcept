<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReusableBlock extends Model
{
    protected $fillable = [
        'name',
        'block_type',
        'status',
        'payload_json',
        'version',
    ];
}
