<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membership extends Model
{
    use HasFactory;

    protected $fillable = ["name_member"];

    public function member(){
        return $this->hasMany(member::class);
    }

    public function hourlyrate(){
        return $this->hasMany(Hourlyrate::class);

    }
}
