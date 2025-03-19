<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
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
            'role' => fake()->randomElement(Staff::$role),
            'phone' => fake()->phoneNumber(),
            'salary' => fake()->randomFloat(2,12_000,25_000),
        ];
    }
}
