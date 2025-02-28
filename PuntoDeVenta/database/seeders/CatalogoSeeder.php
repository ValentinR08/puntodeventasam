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
        $tipos = [
            ['TipoProducto' => 'Abarrotes'],
            ['TipoProducto' => 'Lácteos'],
            ['TipoProducto' => 'Bebidas'],
            ['TipoProducto' => 'Carnes'],
            ['TipoProducto' => 'Frutas y Verduras'],
            ['TipoProducto' => 'Dulcería'],
            ['TipoProducto' => 'Panadería'],
            ['TipoProducto' => 'Cuidado Personal'],
            ['TipoProducto' => 'Limpieza'],
            ['TipoProducto' => 'Electrónicos']
        ];
        DB::table('catalogo')->insert($tipos);
    }

}
