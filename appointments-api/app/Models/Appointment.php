<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Modelo Appointment
 * Representa una cita médica con paciente, doctor, fecha, hora y estado.
 */
class Appointment extends Model
{
    // Campos permitidos para asignación masiva
    protected $fillable = [
        'patient_name',
        'doctor_name',
        'date',
        'time',
        'reason',
        'status',
    ];

    // Casts para convertir automáticamente tipos de datos
    protected $casts = [
        'date' => 'date',
        'time' => 'datetime:H:i:s',
    ];
}
