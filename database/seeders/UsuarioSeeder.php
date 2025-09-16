<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Usuario::create([
            'rut' => '12345678-0',
            'nombre' => 'Pedro',
            'apellido' => 'galaz',
            'email' => 'pedro.galaz@ventasfix.cl',
            'password' => 'password0121',
        ]);

         Usuario::create([
            'rut' => '98765432-0',
            'nombre' => 'Camila',
            'apellido' => 'Perez',
            'email' => 'camila.perez@ventasfix.cl',
            'password' => 'admin1234',
        ]);

            Usuario::create([
            'rut' => '18205841-0',
            'nombre' => 'Alvaro',
            'apellido' => 'Gonzalez',
            'email' => 'alvaro.gonzalez@ventasfix.cl',
            'password' => 'admin1234',
        ]);

        Usuario::create([
            'rut' => '17204831-4',
            'nombre' => 'Mario',
            'apellido' => 'Cepeda',
            'email' => 'mario.cepeda@ventasfix.cl',
            'password' => 'admin1234',
        ]);
    }
}
