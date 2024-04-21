<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Vlog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia ;
    protected $fillable=['title', 'date', 'blog', 'location_id']  ;

    public function location(){
        return $this->belongsTo(Location::class, 'location_id');
    }
}