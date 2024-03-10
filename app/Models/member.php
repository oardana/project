<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'membership_id',
        'email',
        'phone_number',
        'address',
        'gender',
        'date_of_birth'
    ];
}
