<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    /** @use HasFactory<\Database\Factories\RoomsFactory> */
    use HasFactory;

    public function bookings(){
        return $this->hasMany(bookings::class);
    }

    public static $status = ['available','under maintenance'];
    public static $types = ['King', 'Queen','Twin','Full'];
    public static $totalRooms = 500;

    public static function getWeightedRandomRoomType(){
        $roomTypes = [
            'Standard Room' => 60, 
            'Deluxe Room' => 32,   
            'Suite' => 5,     
            'Presidential suite' => 3,
        ];
    
        $totalWeight = array_sum($roomTypes);
        $randomNumber = mt_rand(1, $totalWeight);
    
        foreach ($roomTypes as $type => $weight) {
            $randomNumber -= $weight;
            if ($randomNumber <= 0) {
                return $type;
            }
        }
    
        return 'standard'; 
    }
}
