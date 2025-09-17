<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@ventasfix.cl')->exists()) {
            User::create([
                'rut' => '11.111.111-1',
                'nombre' => 'Admin',
                'apellido' => 'Principal',
                'name' => 'Admin Principal',
                'email' => 'admin@ventasfix.cl',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
