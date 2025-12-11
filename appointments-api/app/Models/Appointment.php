<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes; // descomenta si usas soft deletes

class Appointment extends Model
{
    // use SoftDeletes;

    protected $fillable = [
        'patient_name',
        'doctor_name',
        'date',
        'time',
        'reason',
        'status',
    ];

    // Opcional: tratar date como instancia Carbon
    protected $casts = [
        'date' => 'date',
        'time' => 'datetime:H:i:s', // si prefieres manejar como datetime; también puedes dejar como string
    ];
}
