<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\vehicle;
class Vehicleseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        vehicle::create([
            'license_plate' => 'R 9991 PP',
            'member_id' => 18,
            'vehicletype_id' => 1,
            'notes' => 'success'
        ]);
    }
}
