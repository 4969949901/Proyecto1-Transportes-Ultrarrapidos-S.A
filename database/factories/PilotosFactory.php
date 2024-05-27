<?php

namespace Database\Factories;

use App\Models\Camion;
use App\Models\Pilotos;
use App\Models\Predio;
use App\Models\Transportista;
use Illuminate\Database\Eloquent\Factories\Factory;

class PilotosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $pilotos= Pilotos::class;

    public function definition()
    {
        return [
            'id_transportistas'=>Transportista::inRandomOrder()->first()->id,
            'id_camions'=>Camion::inRandomOrder()->first()->id,
            'id_predios'=>Predio::inRandomOrder()->first()->id,
            'nombre' => $this->faker->name,
            'apellido' => $this->faker->name,
            'numero_dpi' => $this->faker->numerify(),
            'numero_licencia'=>$this->faker->numerify(),

        ];
    }
}
