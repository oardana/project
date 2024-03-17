<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $guard = [];
    protected $fillable = [
        'name',
        'membership_id',
        'email',
        'phone_number',
        'address',
        'gender',
        'date_of_birth'
    ];

    public function membership(){
        return $this->belongsTo(membership::class);
    }
    public function vehicle(){
        return $this->hasMany(vehicle::class);
    }
}
