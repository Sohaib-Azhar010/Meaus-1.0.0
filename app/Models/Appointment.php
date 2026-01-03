<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'doctor',
        'name',
        'email',
        'date',
        'time',
        'message',
        'status',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}

