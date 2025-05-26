<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']);
            $table->foreignId('userId')->constrained('users')->onDelete('cascade');
            $table->dateTime('dateTime');
            $table->boolean('paid')->default(false);
            $table->text('notes');
            $table->unsignedTinyInteger('satisfaction')->nullable()->default(null);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::drop('activity');
    }
};


