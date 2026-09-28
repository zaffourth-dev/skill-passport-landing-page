<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';

    protected $fillable = [
        'institution',
        'major',
        'period',
        'location',
        'focus_areas',
        'sort_order',
    ];

    protected $casts = [
        'focus_areas' => 'array',
    ];
}
