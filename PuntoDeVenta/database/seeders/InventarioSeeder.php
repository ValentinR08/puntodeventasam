<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\inventario;
use Illuminate\Support\Facades\DB;
class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //inventario::factory(10)->create();
        //inventario::factory()->count(10)->create();
        $productos = [
            // Abarrotes
            ['catalogo_id' => 1, 'nombre' => 'Arroz', 'precio' => 50, 'stock' => 100, 'activo' => true],
            ['catalogo_id' => 1, 'nombre' => 'Frijoles', 'precio' => 40, 'stock' => 80, 'activo' => true],
            ['catalogo_id' => 1, 'nombre' => 'Harina de maíz', 'precio' => 30, 'stock' => 90, 'activo' => true],
            
            // Lácteos
            ['catalogo_id' => 2, 'nombre' => 'Leche Entera', 'precio' => 25, 'stock' => 50, 'activo' => true],
            ['catalogo_id' => 2, 'nombre' => 'Queso Manchego', 'precio' => 80, 'stock' => 20, 'activo' => true],
            ['catalogo_id' => 2, 'nombre' => 'Yogur Natural', 'precio' => 35, 'stock' => 30, 'activo' => true],

            // Bebidas
            ['catalogo_id' => 3, 'nombre' => 'Coca-Cola 2L', 'precio' => 35, 'stock' => 100, 'activo' => true],
            ['catalogo_id' => 3, 'nombre' => 'Agua Purificada 1L', 'precio' => 12, 'stock' => 150, 'activo' => true],
            ['catalogo_id' => 3, 'nombre' => 'Café Molido', 'precio' => 120, 'stock' => 40, 'activo' => true],

            // Carnes
            ['catalogo_id' => 4, 'nombre' => 'Pechuga de Pollo', 'precio' => 150, 'stock' => 20, 'activo' => true],
            ['catalogo_id' => 4, 'nombre' => 'Carne de Res', 'precio' => 200, 'stock' => 15, 'activo' => true],
            ['catalogo_id' => 4, 'nombre' => 'Chorizo', 'precio' => 90, 'stock' => 25, 'activo' => true],

            // Frutas y Verduras
            ['catalogo_id' => 5, 'nombre' => 'Manzanas', 'precio' => 45, 'stock' => 60, 'activo' => true],
            ['catalogo_id' => 5, 'nombre' => 'Plátanos', 'precio' => 25, 'stock' => 70, 'activo' => true],
            ['catalogo_id' => 5, 'nombre' => 'Jitomates', 'precio' => 30, 'stock' => 80, 'activo' => true],

            // Dulcería
            ['catalogo_id' => 6, 'nombre' => 'Gomitas', 'precio' => 15, 'stock' => 200, 'activo' => true],
            ['catalogo_id' => 6, 'nombre' => 'Chocolate de leche', 'precio' => 50, 'stock' => 60, 'activo' => true],
            ['catalogo_id' => 6, 'nombre' => 'Paletas de caramelo', 'precio' => 10, 'stock' => 300, 'activo' => true],

            // Panadería
            ['catalogo_id' => 7, 'nombre' => 'Bolillo', 'precio' => 5, 'stock' => 100, 'activo' => true],
            ['catalogo_id' => 7, 'nombre' => 'Conchas', 'precio' => 10, 'stock' => 50, 'activo' => true],
            ['catalogo_id' => 7, 'nombre' => 'Pan de caja', 'precio' => 35, 'stock' => 40, 'activo' => true],

            // Cuidado Personal
            ['catalogo_id' => 8, 'nombre' => 'Shampoo', 'precio' => 70, 'stock' => 30, 'activo' => true],
            ['catalogo_id' => 8, 'nombre' => 'Jabón de tocador', 'precio' => 25, 'stock' => 100, 'activo' => true],
            ['catalogo_id' => 8, 'nombre' => 'Pasta de dientes', 'precio' => 35, 'stock' => 90, 'activo' => true],

            // Limpieza
            ['catalogo_id' => 9, 'nombre' => 'Detergente', 'precio' => 80, 'stock' => 50, 'activo' => true],
            ['catalogo_id' => 9, 'nombre' => 'Cloro', 'precio' => 30, 'stock' => 70, 'activo' => true],
            ['catalogo_id' => 9, 'nombre' => 'Esponjas', 'precio' => 20, 'stock' => 60, 'activo' => true],

            // Electrónicos
            ['catalogo_id' => 10, 'nombre' => 'Audífonos', 'precio' => 250, 'stock' => 20, 'activo' => true],
            ['catalogo_id' => 10, 'nombre' => 'Cargador USB', 'precio' => 120, 'stock' => 35, 'activo' => true],
            ['catalogo_id' => 10, 'nombre' => 'Batería Externa', 'precio' => 300, 'stock' => 15, 'activo' => true]
        ];

        // Insertar en la base de datos
        DB::table('inventario')->insert($productos);
    }
}
