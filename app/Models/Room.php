<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $fillable = ['id', 'roomName', 'roomType', 'roomFloor', 'status', 'description', 'photos', 'offer', 'price', 'discount', 'cancellationPolicy, roomAmenities'];

    public $timestamps = true;
}
