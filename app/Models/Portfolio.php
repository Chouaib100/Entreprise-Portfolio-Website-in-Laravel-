<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'short_desc',
        'image',
        'link',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
