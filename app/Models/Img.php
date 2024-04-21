<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Img extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia ;
    protected $fillable =['name', 'locatioon_id'];

    public function location(){
        return $this->belongsTo(Location::class, 'location_id');
    }
}