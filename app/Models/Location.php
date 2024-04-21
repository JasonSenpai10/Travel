<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable=[
        'location'
    ];
    public function vlog(){
        return $this->hasMany(Vlog::class);
    }
    public function img(){
        return $this->hasMany(Img::class);
    }
}