<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormContact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
