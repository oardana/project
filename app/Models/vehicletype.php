<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicletype extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_type'
    ];

    public function vehicle(){
        return $this->hasMany(vehicle::class);
    }
}
