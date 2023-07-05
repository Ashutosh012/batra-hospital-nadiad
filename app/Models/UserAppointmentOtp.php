<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAppointmentOtp extends Model
{
    use HasFactory;

    protected $table = 'user_appointment_otp';

    protected $fillable = [
        'email',
        'otp',
        'otp_create_time',
        'otp_expire_at',
        'otp_expire',
        'is_verified'
    ];
}
