<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // ajustar si usas auth
    }

    public function rules(): array
    {
        return [
            'patient_name' => 'required|string|max:255',
            'doctor_name'  => 'required|string|max:255',
            'date'         => 'required|date_format:Y-m-d',
            'time'         => 'required|date_format:H:i',
            'reason'       => 'nullable|string',
            'status'       => 'required|in:pendiente,realizada,cancelada',
        ];
    }

    public function messages(): array
    {
        return [
            'date.date_format' => 'El campo date debe tener formato YYYY-MM-DD (ej. 2025-01-15).',
            'time.date_format' => 'El campo time debe tener formato HH:MM (ej. 09:30).',
        ];
    }
}
