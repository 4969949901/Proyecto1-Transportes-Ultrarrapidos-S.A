<?php

namespace Database\Factories;
use App\Models\Predio;

use Illuminate\Database\Eloquent\Factories\Factory;

class prediosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pais' => $this->faker->name,
            'ciudad' => $this->faker->name,
            'direccion' => $this->faker->address,

        ];
    }
}
