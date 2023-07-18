<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile_number',
        'health_problem',
        'appointment_date'
    ];

    protected $casts = [
        'appointment_date' => 'date:hh:mm'
    ];
}
