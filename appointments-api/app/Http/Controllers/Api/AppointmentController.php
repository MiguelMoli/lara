<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\JsonResponse;

class AppointmentController extends Controller
{
    // Listar todas las citas

    public function index(): JsonResponse
    {
        $appointments = Appointment::orderBy('date')->orderBy('time')->get();
        return response()->json($appointments, 200);
    }

    // Crear nueva cita

    public function store(StoreAppointmentRequest $request): JsonResponse
    {
        $data = $request->validated();
        $appointment = Appointment::create($data);
        return response()->json($appointment, 201);
    }

    // Mostrar una cita

    public function show(Appointment $appointment): JsonResponse
    {
        return response()->json($appointment, 200);
    }

    // Actualizar cita

    public function update(UpdateAppointmentRequest $request, Appointment $appointment): JsonResponse
    {
        $appointment->update($request->validated());
        return response()->json($appointment, 200);
    }

    // Eliminar cita

    public function destroy(Appointment $appointment): JsonResponse
    {
        $appointment->delete();
        return response()->json(['message' => 'Cita eliminada'], 200);
    }
}
