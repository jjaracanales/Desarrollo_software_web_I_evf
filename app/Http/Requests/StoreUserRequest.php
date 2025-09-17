<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'rut' => ['required', 'string', 'max:255', 'unique:users,rut'],
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                'regex:/^[A-Za-z0-9._%+-]+@ventasfix\.cl$/',
                'unique:users,email',
            ],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages(): array
    {
        return [
            'rut.required' => 'El RUT es obligatorio.',
            'rut.unique' => 'El RUT ya está registrado.',
            'email.regex' => 'El correo debe ser del dominio @ventasfix.cl.',
        ];
    }
}
