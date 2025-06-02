<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('room', function (Blueprint $table) {
            $table->id('id');
            $table->text('roomName');
            $table->enum('roomType', ['Single Bed', 'Double Bed', 'Double Superior', 'Suite']);
            $table->text('roomFloor');
            $table->enum('status', ['Booked', 'Available']);
            $table->text('description');
            $table->text('photos');
            $table->boolean('offer')->default(false);
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 3, 2);
            $table->text('cancellationPolicy');
            $table->enum('roomAmenities', ['3 Bed Space', '24 Hours Guard', 'Free Wifi', '2 Bathroom', 'Air Conditioner', 'Television']);

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::drop('room');
    }
};


