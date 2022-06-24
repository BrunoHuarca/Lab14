<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class productosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
            'stock' => $this->faker->randomDigit(),
            'precio' => $this->faker->randomFloat(0,0,250),
            'imagen' => $this->faker->imageUrl(),
        ];
    }
}
