<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            $table->string('nombre');
            $table->string('descripcion_corta');
            $table->text('descripcion_larga');
            $table->string('imagen_url');
            $table->decimal('precio_neto', 10, 2);
            $table->decimal('precio_venta', 10, 2);
            $table->unsignedInteger('stock_actual');
            $table->unsignedInteger('stock_minimo');
            $table->unsignedInteger('stock_bajo');
            $table->unsignedInteger('stock_alto');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
