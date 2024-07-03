<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\member;
use Carbon\Carbon;

class MemberSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        member::create([
            'name' => 'sasa',
            'membership_id' => 5,
            'email' => 'd@gmail.com',
            'phone_number' => '0912803122',
            'address' => 'dass',
            'date_of_birth' => Carbon::create('2000','02','01'),
            'gender' => 'male'
        ]);
    }
}
