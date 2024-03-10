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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('membership_id');
            $table->foreign('membership_id')->references('id')->on('memberships');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
