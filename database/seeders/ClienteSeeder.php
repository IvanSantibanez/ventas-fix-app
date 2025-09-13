<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'rut_empresa' => '76945600-9',
            'rubro' => 'Tecnología',
            'razon_social' => 'Tech Solutions Ltda.',
            'telefono' => '56223456789',
            'direccion' => 'Av. tobalaba 123, Santiago',
            'nombre_contacto' => 'Ana Pérez',
            'email_contacto' => 'ana.perez@techsolutions.cl'
        ]);
    }
}
