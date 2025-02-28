<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\catalogo;
use Illuminate\Support\Facades\DB;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //catalogo::factory(10)->create();
        //catalogo::factory()->count(10)->create();
        // Desactivar las restricciones de clave foránea
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    // Limpiar la tabla catalogo
    DB::table('catalogo')->truncate();

    // Insertar los nuevos datos
    DB::table('catalogo')->insert([
        ['id' => 1, 'TipoProducto' => 'Abarrotes'],
        ['id' => 2, 'TipoProducto' => 'Lácteos'],
        ['id' => 3, 'TipoProducto' => 'Bebidas'],
        ['id' => 4, 'TipoProducto' => 'Carnes'],
        ['id' => 5, 'TipoProducto' => 'Frutas y Verduras'],
        ['id' => 6, 'TipoProducto' => 'Dulcería'],
        ['id' => 7, 'TipoProducto' => 'Panadería'],
        ['id' => 8, 'TipoProducto' => 'Cuidado Personal'],
        ['id' => 9, 'TipoProducto' => 'Limpieza'],
        ['id' => 10, 'TipoProducto' => 'Electrónicos'],
    ]);

    // Volver a habilitar las restricciones de clave foránea
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
