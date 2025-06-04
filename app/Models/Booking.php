<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = ['id', 'roomId', 'clientId', 'clientName', 'clientEmail', 'clientPhone', 'orderDate', 'checkInDate', 'checkOutDate', 'status', 'specialRequest'];

    public function user(): BelongsTo {
        return $this->belongsTo(Room::class, 'roomId');
    }

    public $timestamps = true;
}
