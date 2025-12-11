<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'patient_name' => 'sometimes|required|string|max:255',
            'doctor_name'  => 'sometimes|required|string|max:255',
            'date'         => 'sometimes|required|date_format:Y-m-d',
            'time'         => 'sometimes|required|date_format:H:i',
            'reason'       => 'nullable|string',
            'status'       => 'sometimes|required|in:pendiente,realizada,cancelada',
        ];
    }
}
