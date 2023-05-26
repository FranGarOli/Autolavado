<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'dni' => 'required|string|regex:/^\d{8}[a-zA-Z]$/',
            'email' => 'required|email',
            'phone' => 'required|string|regex:/^\d{9}$/',
            'servicios' => 'required',
            'model' => 'required|string|max:255',
            'plate' => 'required|string|regex:/^\d{4}[a-zA-Z]{3}$/',
            'datetime' => 'required|date|after_or_equal:today',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'El nombre del cliente es obligatorio.',
            'dni.required' => 'El DNI es obligatorio.',
            'dni.regex' => 'El DNI tiene no es válido.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe ser válido.',
            'phone.required' => 'El teléfono del cliente es obligatorio.',
            'phone.regex' => 'El teléfono debe tener 9 números.',
            'servicios.required' => 'Debe seleccionar al menos un servicio.',
            'model.required' => 'El modelo del coche es obligatorio.',
            'plate.required' => 'La matrícula del coche es obligatoria.',
            'plate.regex' => 'La matrícula del coche no es válida.',
            'datetime.required' => 'La fecha de entrada es obligatoria.',
            'datetime.after_or_equal' => 'La fecha de entrada debe ser actual o posterior a hoy',
        ];
    }
}
