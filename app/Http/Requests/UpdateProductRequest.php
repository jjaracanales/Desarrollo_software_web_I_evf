<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
        $productId = $this->route('product')?->id ?? null;
        return [
            'sku' => ['required', 'string', 'max:255', Rule::unique('products', 'sku')->ignore($productId)],
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion_corta' => ['required', 'string', 'max:255'],
            'descripcion_larga' => ['required', 'string'],
            'imagen_url' => ['required', 'string', 'max:255'],
            'precio_neto' => ['required', 'numeric', 'min:0'],
            'stock_actual' => ['required', 'integer', 'min:0'],
            'stock_minimo' => ['required', 'integer', 'min:0'],
            'stock_bajo' => ['required', 'integer', 'min:0'],
            'stock_alto' => ['required', 'integer', 'min:0'],
        ];
    }
}
