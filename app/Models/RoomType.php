<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    public function images(){
        return $this->hasMany(RoomImage::class);
    }
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
