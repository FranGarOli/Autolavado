<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => ['required', 'regex:/^\d+(\.\d+)?$/', 'min:0'],
            'category' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título del servicio es requerido.',
            'title.string' => 'El título del servicio debe ser un texto.',
            'title.max' => 'El título del servicio no puede exceder los 255 caracteres.',
            'description.required' => 'La descripción del servicio es requerida.',
            'description.string' => 'La descripción del servicio debe ser un texto.',
            'price.required' => 'El precio del servicio es requerido.',
            'price.numeric' => 'El precio del servicio debe ser un valor numérico.',
            'price.min' => 'El precio del servicio no puede ser menor que 0.',
            'category.required' => 'La categoría del servicio es requerida.',
            'category.string' => 'La categoría del servicio debe ser un texto.',
        ];
    }
}
