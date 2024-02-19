<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class FroSlider extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        // Add other fillable attributes here if any
        'quote',
    ];
}