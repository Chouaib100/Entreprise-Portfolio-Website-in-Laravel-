<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'short_desc',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
