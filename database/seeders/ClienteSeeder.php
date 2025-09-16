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

        Cliente::create([
            'rut_empresa'     => '76981234-6',
            'rubro'           => 'Electronica',
            'razon_social'    => 'ElectroMax Chile S.A.',
            'telefono'        => '56223214567',
            'direccion'       => 'Av. Vicuña Mackenna 3456, Ñuñoa, Santiago',
            'nombre_contacto' => 'Felipe Araya',
            'email_contacto'  => 'felipe.araya@electromax.cl'
        ]);

        Cliente::create([
            'rut_empresa'     => '76890123-4',
            'rubro'           => 'Electrodomésticos',
            'razon_social'    => 'CasaTec Ltda.',
            'telefono'        => '56227983450',
            'direccion'       => 'Av. Providencia 2101, Providencia, Santiago',
            'nombre_contacto' => 'Daniela Fuentes',
            'email_contacto'  => 'daniela.fuentes@casatec.cl'
        ]);

        Cliente::create([
            'rut_empresa'     => '76543219-8',
            'rubro'           => 'Distribución de Hardware',
            'razon_social'    => 'Hardware Express SpA',
            'telefono'        => '56224876543',
            'direccion'       => 'Camino a Melipilla 5000, Maipú, Santiago',
            'nombre_contacto' => 'Jorge Pizarro',
            'email_contacto'  => 'jorge.pizarro@hwexpress.cl'
        ]);

        Cliente::create([
            'rut_empresa'     => '76789012-3',
            'rubro'           => 'E-commerce Tecnológico',
            'razon_social'    => 'TechMarket Online SpA',
            'telefono'        => '56223112233',
            'direccion'       => 'Cerro El Plomo 5630, Las Condes, Santiago',
            'nombre_contacto' => 'Carolina Rojas',
            'email_contacto'  => 'carolina.rojas@techmarket.cl'
        ]);

        Cliente::create([
            'rut_empresa'     => '76944567-2',
            'rubro'           => 'Telefonia y Comunicaciones',
            'razon_social'    => 'Soluciones Digitales Entel Ltda.',
            'telefono'        => '56224335678',
            'direccion'       => 'Av. Alemania 1255, Temuco',
            'nombre_contacto' => 'Matías Vergara',
            'email_contacto'  => 'matias.vergara@entel.cl'
        ]);
    }
}
