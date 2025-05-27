<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    protected $table = 'activity';

    protected $fillable = ['type', 'userId', 'datetime', 'paid', 'notes', 'satisfaction'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public $timestamps = true;
}
