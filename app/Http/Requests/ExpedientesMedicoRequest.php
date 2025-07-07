<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpedientesMedicoRequest extends FormRequest
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
        'paciente_id' => 'required|exists:pacientes,id',
        'usuario_id' => 'required|exists:users,id',
        'fecha_evento' => 'required|date',
        'descripcion' => 'required|string',
        'producto_utilizado' => 'nullable|string',
    ];
}

}
