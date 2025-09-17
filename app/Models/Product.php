<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'nombre',
        'descripcion_corta',
        'descripcion_larga',
        'imagen_url',
        'precio_neto',
        'stock_actual',
        'stock_minimo',
        'stock_bajo',
        'stock_alto',
    ];

    protected $casts = [
        'precio_neto' => 'decimal:2',
        'precio_venta' => 'decimal:2',
        'stock_actual' => 'integer',
        'stock_minimo' => 'integer',
        'stock_bajo' => 'integer',
        'stock_alto' => 'integer',
    ];

    public function setPrecioNetoAttribute($value)
    {
        $this->attributes['precio_neto'] = $value;
        $venta = round((float)$value * 1.19, 2);
        $this->attributes['precio_venta'] = number_format($venta, 2, '.', '');
    }
}
