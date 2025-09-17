<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'sku' => 'VF-SSD-240',
                'nombre' => 'SSD 240GB',
                'descripcion_corta' => 'SSD SATA III 240GB',
                'descripcion_larga' => 'Unidad de estado sólido de 240GB con interfaz SATA III, ideal para mejorar el rendimiento del sistema.',
                'imagen_url' => '/template/img/products/ssd-240.jpg',
                'precio_neto' => 19990,
                'stock_actual' => 50,
                'stock_minimo' => 10,
                'stock_bajo' => 20,
                'stock_alto' => 100,
            ],
            [
                'sku' => 'VF-RAM-8G',
                'nombre' => 'Memoria RAM 8GB',
                'descripcion_corta' => 'DDR4 2666MHz 8GB',
                'descripcion_larga' => 'Módulo de memoria DDR4 de 8GB a 2666MHz, compatibilidad con la mayoría de notebooks y PCs.',
                'imagen_url' => '/template/img/products/ram-8g.jpg',
                'precio_neto' => 15990,
                'stock_actual' => 80,
                'stock_minimo' => 15,
                'stock_bajo' => 30,
                'stock_alto' => 150,
            ],
            [
                'sku' => 'VF-NB-CHG',
                'nombre' => 'Cargador Notebook',
                'descripcion_corta' => 'Cargador universal 65W',
                'descripcion_larga' => 'Cargador universal para notebook de 65W con múltiples puntas y protección contra sobrecargas.',
                'imagen_url' => '/template/img/products/charger-65w.jpg',
                'precio_neto' => 12990,
                'stock_actual' => 40,
                'stock_minimo' => 8,
                'stock_bajo' => 16,
                'stock_alto' => 80,
            ],
        ];

        foreach ($products as $data) {
            Product::updateOrCreate(['sku' => $data['sku']], $data);
        }
    }
}
