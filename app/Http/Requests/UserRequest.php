<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserRequest extends FormRequest
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
    $rules = [
        'name' => 'required|string',
        'email' => 'required|string|email|unique:users,email,' . optional($this->route('user'))->id,
        'rol' => 'required',
        // otros campos...
    ];

    if ($this->isMethod('post')) {
        // Si es creación, password obligatorio y con reglas
        $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
    }

    if ($this->isMethod('put') || $this->isMethod('patch')) {
        // Si es actualización, password es opcional pero si viene debe ser válido
        $rules['password'] = ['nullable', 'string', 'min:8', 'confirmed'];
    }

    return $rules;
}




} 
