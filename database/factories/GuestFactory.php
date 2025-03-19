<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Guest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => fake()->password(),
            'address' => fake()->streetAddress(),
            'phone' => fake()->phoneNumber(),
            'check_in_date' => fake()->dateTime(),
            'check_out_date' => fake()->dateTime(),
        ];
    }
}
