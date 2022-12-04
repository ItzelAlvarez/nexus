<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->randomElement(['Trapeador', 'Escoba','Guantes', 'Jabon multiusos', 'Papel Higienico']),
            'user_id' => 1,
            'categoria_id' => 2,
            'existencias' => $this->faker->randomNumber(2, false),
            'precio' => $this->faker->randomFloat(2, 3, 100),
        ];
    }
}
