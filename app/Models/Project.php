<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'target_date',
        'skills',
    ];

    protected $casts = [
        'skills' => 'array',
        'target_date' => 'date',
    ];
}
