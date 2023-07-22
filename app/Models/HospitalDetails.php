<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'helpline_number',
        'map_link'
    ];
}
