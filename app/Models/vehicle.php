<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;

    protected $fillable =[
        'license_plate',
        'member_id',
        'vehicle_type_id',
        'notes',
    ];

    public function parkingdata(){
        return $this->hasMany(parkingdata::class);
    }
}
