<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'job',
        'short_desc',
        'facebook',
        'linkdlin',
        'instagram',
        'twitter',
        'photo',
        'pdfresume',
        'videocandidate',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
