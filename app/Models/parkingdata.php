<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parkingdata extends Model
{
    use HasFactory;
    protected $fillable =[
        'license_plate',
        'vehicle_id',
        'employee_id',
        'hourly_rates_id',
        'date_in',
        'date_out',
        'amount_to_pay'
    ];

    public function vehicle(){
        return $this->belongsTo(vehicle::class);
    }
}
