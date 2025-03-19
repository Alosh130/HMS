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

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Guest::factory(100)->create();
        Rooms::factory(500)->create();
        Staff::factory(75)->create();
    }
}
