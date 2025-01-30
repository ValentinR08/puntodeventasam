<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumnos;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlumnosFactory extends Factory
{
    protected $model = Alumnos::class;
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
            'edad' => $this->faker->numberBetween(18,80),
            'apellido' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
        ];
    }
}
