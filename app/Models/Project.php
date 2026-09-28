<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'role',
        'technologies',
        'features',
        'group_name',
        'demo_url',
        'github_url',
        'image_path',
        'sort_order',
        'is_featured',
    ];

    protected $casts = [
        'technologies' => 'array',
        'features' => 'array',
        'is_featured' => 'boolean',
    ];
}
