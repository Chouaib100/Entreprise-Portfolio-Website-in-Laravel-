<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'message',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
