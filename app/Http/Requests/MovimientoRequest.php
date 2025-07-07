<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovimientoRequest extends FormRequest
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
        'inventario_id' => 'required|exists:inventarios,id',
        'usuario_id' => 'required|exists:users,id',
        'tipo' => 'required',
        'cantidad' => 'required|numeric',
        'fecha_movimiento' => 'required|date',
        'observaciones' => 'nullable|string',
    ];
}
}
