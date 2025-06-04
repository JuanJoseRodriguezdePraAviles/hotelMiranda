<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $orderDate = $this->faker->dateTimeBetween('-1 month', 'now');
        $checkInDate = $this->faker->dateTimeBetween($orderDate->format('Y-m-d') . ' +1 day', $orderDate->format('Y-m-d') . ' +5 days');
        $checkOutDate = $this->faker->dateTimeBetween($checkInDate->format('Y-m-d') . ' +1 day', $checkInDate->format('Y-m-d') . ' +5 days');
        return [
            'roomId' => Room::factory(),
            'clientId' => (string) Str::uuid(),
            'clientName' => $this->faker->name(),
            'clientEmail' => $this->faker->email(),
            'clientPhone' => $this->faker->phoneNumber(),
            'orderDate' => $orderDate->format('Y-m-d'),
            'checkInDate' => $checkInDate->format('Y-m-d'),
            'checkOutDate' => $checkOutDate->format('Y-m-d'),
            'status' => $this->faker->randomElement(['Check In', 'Check Out', 'In Progress']),
            'specialRequest' => $this->faker->sentence()
        ];
    }
}
