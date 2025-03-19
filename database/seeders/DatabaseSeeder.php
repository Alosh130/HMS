<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Guest;
use \App\Models\Rooms;
use \App\Models\Staff;
use App\Models\Bookings;
use App\Models\Facilities;
use App\Models\Payments;
use App\Models\Reviews;
use App\Models\Services;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Guest::factory(200)->create();
        Rooms::factory(Guest::getNumberofguests())->occupied()->create([
            'name' => function(){
                return Rooms::getWeightedRandomRoomType();
            }
        ]);
        Rooms::factory(Rooms::$totalRooms - Guest::getNumberofguests())->create([
            'name' => function(){
                return Rooms::getWeightedRandomRoomType();
            }
        ]);
        Staff::factory(75)->create();
        Services::factory(count(Services::$services))->create();
    }
}
