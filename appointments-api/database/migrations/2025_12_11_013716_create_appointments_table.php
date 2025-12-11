<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migración para crear la tabla appointments.
 * Almacena las citas médicas con datos del paciente, doctor, fecha, hora y estado.
 */

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();                                              // ID de la cita
            $table->string('patient_name');                            // Nombre del paciente
            $table->string('doctor_name');                             // Nombre del doctor
            $table->date('date');                                      // Fecha de la cita
            $table->time('time');                                      // Hora de la cita
            $table->text('reason')->nullable();                        // Motivo de la cita
            $table->enum('status', ['pendiente','realizada','cancelada'])
                  ->default('pendiente');                              // Estado de la cita
            $table->timestamps();                                      // created_at / updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
