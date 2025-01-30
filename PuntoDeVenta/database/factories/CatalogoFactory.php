<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\catalogo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\catalogo>
 */
class CatalogoFactory extends Factory
{
    protected $model = catalogo::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'tipoProducto' => $this->faker->name(),
            
        ];
    }
}
