<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sexo' => [
                'required',
            ],
            'curso' => [
                'required',
            ],
            'nombre' => [
                'required',
                'regex:/^[a-zA-Z]+$/',
            ],
            'apellidos' => [
                'required',
                'regex:/^[a-zA-Z]+$/',
            ],
            'sip' => [
                'required',
                'regex:/^\d{10}$/',
            ],
            'fechnac' => [
                'required'
            ],
            'comedor' => [
                'required'
            ],
        ];
    }
}
