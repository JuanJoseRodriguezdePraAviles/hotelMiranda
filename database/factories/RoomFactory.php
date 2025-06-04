<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'roomName' => $this->faker->word(),
            'roomType' => $this->faker->randomElement(['Single Bed', 'Double Bed', 'Double Superior', 'Suite']),
            'roomFloor' => (string) $this->faker->numberBetween(1,10),
            'status' => $this->faker->randomElement(['Booked', 'Available']),
            'description' => $this->faker->sentence(),
            'photos' => implode(',', [
                $this->faker->imageUrl(),
                $this->faker->imageUrl(),
                $this->faker->imageUrl(),
            ]),
            'offer' => $this->faker->boolean(),
            'price' => $this->faker->numberBetween(70, 999),
            'discount' => $this->faker->randomFloat(2, 0, 100),
            'cancellationPolicy' => $this->faker->sentence(),
            'roomAmenities' => $this->faker->randomElement(['3 Bed Space', '24 Hours Guard', 'Frre Wifi', '2 Bathroom', 'Air Conditioner', 'Television'])
        ];
    }
}
