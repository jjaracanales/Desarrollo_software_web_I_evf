<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('rut')->unique()->after('id');
            $table->string('nombre')->after('rut');
            $table->string('apellido')->after('nombre');

            // Asegurar unicidad de email ya existe; validación de dominio irá en FormRequest
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['rut', 'nombre', 'apellido']);
        });
    }
};
