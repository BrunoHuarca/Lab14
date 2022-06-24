<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class adminsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usuario' => $this->faker->userName(),
            'password' => $this->faker->password(),
        ];
    }
}
