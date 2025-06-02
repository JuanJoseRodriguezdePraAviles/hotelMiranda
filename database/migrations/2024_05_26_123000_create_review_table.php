<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('review', function (Blueprint $table) {
            $table->id('id');
            $table->text('email');
            $table->dateTime('date');
            $table->text('customerName');
            $table->text('phone');
            $table->text('subject');
            $table->text('comment');
            $table->boolean('archived');
            $table->boolean('status')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::drop('review');
    }
};


