<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /** @use HasFactory<\Database\Factories\GuestsFactory> */
    use HasFactory;

    public static function getNumberofguests(){
        return self::count();
    }
}
