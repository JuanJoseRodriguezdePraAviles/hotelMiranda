<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Activity;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Room::factory()->count(10)->create();

        Booking::factory()->count(3)->create([
            'roomId' => Room::inRandomOrder()->first()?->id ?? Room::factory(),
        ]);

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Activity::create([
            'type' => 'surf',
            'datetime' => now()->subDays(1),
            'paid' => true,
            'notes' => 'First activity',
            'satisfaction' => 8,
            'userId' => $user->id
        ]);

        Activity::create([
            'type' => 'kayak',
            'datetime' => now()->subDays(1),
            'paid' => true,
            'notes' => 'First activity',
            'satisfaction' => 8,
            'userId' => $user->id
        ]);
    }
}
