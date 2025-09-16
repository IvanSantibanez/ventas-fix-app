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
            'sku' => '3523322',
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
            'sku' => '3523323',
            'nombre' => 'iPhone 15 128GB',
            'descripcion_corta' => 'iPhone 15 de 128GB, chip A16 y cámara avanzada.',
            'descripcion_larga' => 'El iPhone 15 ofrece gran rendimiento con el chip A16 Bionic, cámara de 48 MP y pantalla OLED de alta calidad. Ideal para uso diario y fotografía.',
            'imagen_url' => 'https://m-cdn.phonearena.com/images/hub/404-wide-two_1200/Apple-iPhone-15-release-date-price-and-features.jpg',
            'precio_neto' => 799000,
            'precio_venta' => 999990,
            'stock_actual' => 35,
            'stock_minimo' => 8,
            'stock_bajo' => 8,
            'stock_alto' => 120,
        ]);

        Producto::create([
            'sku' => '3523324',
            'nombre' => 'Notebook ASUS TUF Gaming F15',
            'descripcion_corta' => 'Notebook gamer 15.6" FHD, Intel i7 y RTX 4060.',
            'descripcion_larga' => 'Portátil gaming con pantalla 144Hz, procesador Intel Core i7, GPU NVIDIA GeForce RTX 4060, 16GB RAM y 512GB SSD para alto desempeño.',
            'imagen_url' => 'https://media.solotodo.com/media/products/1892827_picture_1709951044.jpg',
            'precio_neto' => 899000,
            'precio_venta' => 1199990,
            'stock_actual' => 20,
            'stock_minimo' => 5,
            'stock_bajo' => 5,
            'stock_alto' => 60,
        ]);

        Producto::create([
            'sku' => '3523325',
            'nombre' => 'Smart TV LG OLED 55" C3 4K',
            'descripcion_corta' => 'Televisor OLED 55" 4K con webOS y Dolby Vision.',
            'descripcion_larga' => 'La serie LG C3 ofrece negros perfectos, gran contraste y soporte para Dolby Vision/Atmos, ideal para cine en casa y gaming de última generación.',
            'imagen_url' => 'https://www.lg.com/africa/images/tvs/md07589746/gallery/large-m10.jpg',
            'precio_neto' => 1099000,
            'precio_venta' => 1399990,
            'stock_actual' => 12,
            'stock_minimo' => 3,
            'stock_bajo' => 3,
            'stock_alto' => 40,
        ]);

        Producto::create([
            'sku' => '3523326',
            'nombre' => 'Refrigerador Samsung No Frost 400L',
            'descripcion_corta' => 'Refrigerador No Frost 400 litros, eficiencia energética.',
            'descripcion_larga' => 'Refrigerador Samsung con tecnología Digital Inverter, diseño moderno y distribución eficiente del espacio para conservar tus alimentos por más tiempo.',
            'imagen_url' => 'https://images.samsung.com/is/image/samsung/au-rt35k5030bs-rt35k5030bs-sa-202039217?$684_547_PNG$',
            'precio_neto' => 549000,
            'precio_venta' => 699990,
            'stock_actual' => 18,
            'stock_minimo' => 4,
            'stock_bajo' => 4,
            'stock_alto' => 50,
        ]);

        Producto::create([
            'sku' => '3523327',
            'nombre' => 'Aspiradora Robot Xiaomi Vacuum S10',
            'descripcion_corta' => 'Robot aspirador con mapeo láser y múltiples modos.',
            'descripcion_larga' => 'La Xiaomi Vacuum S10 realiza limpieza inteligente con mapeo láser, control desde app y modos programables para mantener tu hogar impecable.',
            'imagen_url' => 'https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1677487225.40455674.png',
            'precio_neto' => 219000,
            'precio_venta' => 279990,
            'stock_actual' => 40,
            'stock_minimo' => 10,
            'stock_bajo' => 10,
            'stock_alto' => 120,
        ]);


        Producto::create([
            'sku' => '3523329',
            'nombre' => 'Smartwatch Samsung Galaxy Watch6 44mm',
            'descripcion_corta' => 'Smartwatch con monitoreo de salud y GPS.',
            'descripcion_larga' => 'Galaxy Watch6 44mm con pantalla brillante, seguimiento de sueño, ritmo cardíaco, GPS integrado y gran integración con el ecosistema Samsung.',
            'imagen_url' => 'https://image-us.samsung.com/us/watches/galaxy-watch6/silver/R940-silver/1.jpg?$product-details-jpg$',
            'precio_neto' => 219000,
            'precio_venta' => 289990,
            'stock_actual' => 32,
            'stock_minimo' => 6,
            'stock_bajo' => 6,
            'stock_alto' => 90,
        ]);
    }
}
