<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            [
                'rut_empresa' => '76.543.210-9',
                'rubro' => 'Tecnología',
                'razon_social' => 'Tecno Sur SpA',
                'telefono' => '+56 9 5555 1111',
                'direccion' => 'Av. Siempre Viva 123, Santiago',
                'contacto_nombre' => 'María López',
                'contacto_email' => 'maria.lopez@tecnosur.cl',
            ],
            [
                'rut_empresa' => '77.111.222-3',
                'rubro' => 'Retail',
                'razon_social' => 'Comercial Andina Ltda',
                'telefono' => '+56 2 2345 6789',
                'direccion' => 'Los Pinos 456, Providencia',
                'contacto_nombre' => 'Juan Pérez',
                'contacto_email' => 'juan.perez@andina.cl',
            ],
            [
                'rut_empresa' => '65.432.100-5',
                'rubro' => 'Educación',
                'razon_social' => 'Instituto Austral',
                'telefono' => '+56 63 222 3344',
                'direccion' => 'Av. del Mar 789, Valdivia',
                'contacto_nombre' => 'Carolina Muñoz',
                'contacto_email' => 'carolina.munoz@iaustral.cl',
            ],
        ];

        foreach ($clients as $data) {
            Client::updateOrCreate(['rut_empresa' => $data['rut_empresa']], $data);
        }
    }
}
