<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $casts = [
        'services' => 'array',
    ];

    protected $fillable = [
        'service_options_id',
        'title',
        'slug',
        'description',
        'image',
        'services'
    ];

    public function serviceoptions(){
        return $this->belongsTo(ServiceOptions::class);
    }
}
