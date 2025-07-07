<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventarioRequest extends FormRequest
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
        'botiquin_id' => 'required|exists:botiquines,id',
        'producto_id' => 'required|exists:productos,id',
        'cantidad' => 'required|numeric|min:1',
        'fecha_caducidad' => 'required|date',
        'fecha_registro' => 'required|date',
    ];
}

}
