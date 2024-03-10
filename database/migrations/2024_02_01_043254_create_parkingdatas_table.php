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
        Schema::create('parkingdatas', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('users');
            $table->unsignedBigInteger('hourly_rates_id');
            $table->foreign('hourly_rates_id')->references('id')->on('hourlyrates');
            $table->datetime('date_in');
            $table->datetime('date_out');
            $table->integer('amount_to_pay');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkingdatas');
    }
};
