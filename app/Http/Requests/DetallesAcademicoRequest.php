<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetallesAcademicoRequest extends FormRequest
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
        'paciente_id' => ['required', 'exists:pacientes,id'],
        'tipo_academico' => ['required', 'in:Estudiante,Docente'],
        'matricula' => ['required', 'regex:/^[0-9]+$/', 'min:6', 'max:15'],
        'carrera' => ['required', 'string', 'max:100'],
        'grupo' => ['required', 'regex:/^[A-Za-z]+$/'],
        'semestre' => ['required', 'integer', 'min:1', 'max:12'],
    ];
}

}
