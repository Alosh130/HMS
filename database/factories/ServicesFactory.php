<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Services;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $index = 0;
        $servicePrices = 
        [
            'Wi-Fi' => 'Free',
            'Transportation_Card' => 30,
            'Spa' => 100,
            'Butler' => 50,
            'Concierge' => 30,
        ];
        $index = ($index + 1) % count(Services::$services);
        $serviceName = Services::$services[$index];
        $price = $servicePrices[$serviceName];

        return [
            'name' => $serviceName,
            'description' => fake()->paragraph(2,true),
            'price' => $price,
        ];
    }
}
