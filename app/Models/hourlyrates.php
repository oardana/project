<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hourlyrates extends Model
{
    use HasFactory;

    protected $fillable = ['membership_id','vehicletype_id','value'];

    public function vehicletype(){
        return $this->belongsTo(vehicletype::class);
        
    }

}
