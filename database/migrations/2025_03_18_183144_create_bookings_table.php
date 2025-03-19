<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained()->onDelete('cascade');
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->dateTime('check_in_date');
            $table->dateTime('check_out_date');
            $table->unsignedInteger('total_price');
            $table->enum('status',['confirmed','pending','canceled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings',function (Blueprint $table){
            $table->dropForeign(['guest_id']);
            $table->dropForeign(['room_id']);
        });

        Schema::dropIfExists('bookings');
    }
};
