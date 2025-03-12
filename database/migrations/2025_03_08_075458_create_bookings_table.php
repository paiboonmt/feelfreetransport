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
            $table->string('from');
            $table->string('to');
            $table->string('journy');
            $table->string('vehicle_type');
            $table->string('vehicle');
            $table->string('passengers');
            $table->string('hotel');
            $table->string('destination');
            $table->string('pick_up_date');
            $table->string('pick_up_time');
            $table->string('passenger_name');
            $table->string('phone');
            $table->string('email');
            $table->string('remark');
            $table->string('status')->default('pending');
            $table->date('date')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
