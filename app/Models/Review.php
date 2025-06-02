<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';

    protected $fillable = ['id', 'email', 'date', 'customerName', 'phone', 'subject', 'comment', 'archived', 'clientId'];

    public $timestamps = true;
}
