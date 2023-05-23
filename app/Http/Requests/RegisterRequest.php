<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'dni' => 'required|string|min:9|max:9',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'servicios' => 'required|array',
            'servicios.*' => 'required|string',
            'model' => 'required|string|max:255',
            'plate' => 'required|string|max:255',
            'limitDate' => 'required|date|after:today',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del cliente es obligatorio.',
            'dni.required' => 'El DNI es obligatorio.',
            'dni.min' => 'El DNI tiene mínimo 9 carácteres.',
            'dni.max' => 'El DNI tiene máximo 9 carácteres.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe ser válido.',
            'phone.required' => 'El teléfono del cliente es obligatorio.',
            'servicios.required' => 'Debe seleccionar al menos un servicio.',
            'model.required' => 'El modelo del coche es obligatorio.',
            'plate.required' => 'La matrícula del coche es obligatoria.',
            'limitDate.required' => 'La fecha de recogida es obligatoria.',
            'limitDate.after' => 'La fecha debe ser actual o posterior a hoy',
        ];
    }

}
