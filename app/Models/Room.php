<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;
    
    protected $table = 'room';

    protected $fillable = ['id', 'roomName', 'roomType', 'roomFloor', 'status', 'description', 'photos', 'offer', 'price', 'discount', 'cancellationPolicy', 'roomAmenities'];

    public $timestamps = true;

    protected $casts = [
        'roomAmenities' => 'array',
    ];
}
