<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('employee', function (Blueprint $table) {
            $table->id('dni');
            $table->text('name');
            $table->text('email');
            $table->text('password')->nullable();
            $table->text('jobFunctions');
            $table->dateTime('registrationDate');
            $table->text('phone');
            $table->text('schelude');
            $table->boolean('status')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::drop('employee');
    }
};


