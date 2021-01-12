<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function roomtype(){
        return $this->belongsTo(RoomType::class,'room_type_id');
    }
}
