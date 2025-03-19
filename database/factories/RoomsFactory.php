<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rooms;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rooms>
 */
class RoomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => '',
            'bed_type'=>fake()->randomElement(Rooms::$types),
            'number_of_beds' =>fake()->numberBetween(1,2),
            'price'=> fake()->boolean(90)
            ?fake()->randomFloat(2,80,500)
            :fake()->randomFloat(2,500,5000),
            'status'=>fake()->boolean(75)
            ?Rooms::$status[0] : Rooms::$status[1],
        ];
    }

    public function occupied(){
        return $this->state(function (array $attributes){
            return [
                'status' => 'occupied',
            ];
        });
    }
}
