<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rooms;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rooms>
 */
class RoomsFactory extends Factory
{
    private static $roomIndex = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomPrice =[
            'Standard Room' => 500, 
            'Deluxe Room' => 800,   
            'Suite' => 1200,     
            'Presidential suite' => 1500,
        ];
        $roomTypes = array_keys($roomPrice);
        $roomType = $roomTypes[self::$roomIndex % count($roomTypes)];
        self::$roomIndex++;
        $price = $roomPrice[$roomType];
        return [
            'name' => '',
            'bed_type'=>fake()->randomElement(Rooms::$types),
            'number_of_beds' =>fake()->numberBetween(1,2),
<<<<<<< HEAD
            'price'=> $price,
=======
            'price'=> fake()->boolean(90)
            ?fake()->randomFloat(2,80,500)
            :fake()->randomFloat(2,500,5000),
>>>>>>> 920039d4186de30014b64399d413ffe7da3c2419
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
