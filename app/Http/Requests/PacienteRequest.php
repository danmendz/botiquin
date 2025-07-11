<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'tipo_paciente' => 'required|exists:tipo_pacientes,id',
            'fecha_nacimiento' => 'nullable|date',
            'nombre' => 'required|string',
			'genero' => 'required',
            'matricula' => 'nullable|string|max:255',
            'carrera' => 'nullable|string|max:255',
            'grupo' => 'nullable|string|max:255',
            'semestre' => 'nullable|string|max:255',
        ];
    }
}
