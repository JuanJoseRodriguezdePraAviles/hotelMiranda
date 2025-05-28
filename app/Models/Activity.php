<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    protected $table = 'activity';

    protected $fillable = ['type', 'datetime', 'paid', 'notes', 'satisfaction', 'userId'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'userId');
    }

    public $timestamps = true;
}
