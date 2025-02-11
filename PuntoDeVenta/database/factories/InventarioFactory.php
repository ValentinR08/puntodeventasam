<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\inventario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\inventario>
 */
class InventarioFactory extends Factory
{

    protected $model = inventario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->name(),
            'precio' => $this->faker->numberBetween(10,100),
            'stock' => $this->faker->numberBetween(10,100),
            'catalogo_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
