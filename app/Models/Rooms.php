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

    public static $status = ['available','occupied','under maintenance'];
    public static $types = ['single', 'double'];
}
