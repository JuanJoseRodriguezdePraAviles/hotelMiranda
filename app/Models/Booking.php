<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $table = 'activity';

    protected $fillable = ['id', 'roomId', 'clientId', 'clientName', 'clientEmail', 'clientPhone', 'orderDate', 'checkInDate', 'checkOutDate', 'status', 'specialRequest'];

    public function user(): BelongsTo {
        return $this->belongsTo(Room::class, 'roomId');
    }

    public $timestamps = true;
}
