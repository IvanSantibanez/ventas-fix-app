<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'sku' => 'PROD-001',
            'nombre' => 'Celular Samsung S24 FE',
            'descripcion_corta' => 'Celular Samsung S24 FE de última generación.',
            'descripcion_larga' => 'El Samsung S24 FE ofrece un rendimiento excepcional, una cámara de alta calidad y una pantalla vibrante para una experiencia móvil inigualable.',
            'imagen_url' => 'https://http2.mlstatic.com/D_NQ_NP_2X_964095-MLA88511473009_072025-F.webp',
            'precio_neto' => 599000,
            'precio_venta' => 890000,
            'stock_actual' => 50,
            'stock_minimo' => 10,
            'stock_bajo' => 10,
            'stock_alto' => 100,
        ]);

        Producto::create([
            'sku' => 'PROD-002',
            'nombre' => 'nombre de prueba',
            'descripcion_corta' => 'descripción corta de prueba',
            'descripcion_larga' => 'descripción larga wqfqt3r1 geegw ge g w gw g  g g r h 5r h',
            'imagen_url' => 'https://http2.mlstatic.com/D_NQ_NP_2X_661052-MLA49766829295_042022-F.webp',
            'precio_neto' => 999000,
            'precio_venta' => 1299000,
            'stock_actual' => 30,
            'stock_minimo' => 5,
            'stock_bajo' => 5,
            'stock_alto' => 50,
        ]);
    }
}
