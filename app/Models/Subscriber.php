<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'email',
        'name',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
