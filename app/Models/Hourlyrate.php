<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hourlyrate extends Model
{
    use HasFactory;
    protected $fillable = ['membership_id','vehicletype_id','value'];

    public function vehicletype(){
        return $this->belongsTo(vehicletype::class);
    }

    public function membership(){
        return $this->belongsTo(membership::class);
    }

    public function parkingdata(){
        return $this->hasMany(parkingdata::class);
    }
}
