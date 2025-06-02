<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('booking', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('roomId')->constrained('users')->onDelete('cascade');
            $table->text('clientId');
            $table->text('clientName');
            $table->text('clientEmail');
            $table->text('clientPhone');
            $table->dateTime('orderDate');
            $table->dateTime('checkInDate');
            $table->dateTime('checkOutDate');
            $table->enum('status', ['Check In', 'Check Out', 'In Progress']);
            $table->text('specialRequest');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::drop('booking');
    }
};


