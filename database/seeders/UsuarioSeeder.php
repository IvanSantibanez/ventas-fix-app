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
            'rut' => '123456789-0',
            'nombre' => 'Pedro',
            'apellido' => 'Galaz',
            'email' => 'pedro.galaz@ventasfix.cl',
            'password' => 'password0121',
        ]);
    }
}
