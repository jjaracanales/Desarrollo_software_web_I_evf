<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'nombre' => $this->nombre,
            'descripcion_corta' => $this->descripcion_corta,
            'descripcion_larga' => $this->descripcion_larga,
            'imagen_url' => $this->imagen_url,
            'precio_neto' => $this->precio_neto,
            'precio_venta' => $this->precio_venta,
            'stock_actual' => $this->stock_actual,
            'stock_minimo' => $this->stock_minimo,
            'stock_bajo' => $this->stock_bajo,
            'stock_alto' => $this->stock_alto,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
