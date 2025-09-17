<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClientRequest extends FormRequest
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
            'rut_empresa' => ['required', 'string', 'max:255', 'unique:clients,rut_empresa'],
            'rubro' => ['required', 'string', 'max:255'],
            'razon_social' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'contacto_nombre' => ['required', 'string', 'max:255'],
            'contacto_email' => ['required', 'email', 'max:255'],
        ];
    }
}
