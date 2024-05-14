<?php

namespace Database\Factories;

use App\Models\Bodega;
use App\Models\Camion;
use App\Models\Ingreso;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $ingreso=Ingreso::class;
    public function definition()
    {
        return [
            'id_camion' => Camion::inRandomOrder()->first()->id, // Genera un ID de camión aleatorio entre 1 y 10
            'id_bodega_ingreso' => Bodega::inRandomOrder()->first()->id, // Genera un ID de bodega aleatorio entre 1 y 5
            'fecha_hora_ingreso' => $this->faker->dateTime(), // Genera una fecha y hora aleatoria
            'piloto' => $this->faker->name(), // Genera un nombre aleatorio para el piloto
            'origen' => $this->faker->city, // Genera un nombre aleatorio de ciudad como origen
            'carga' => $this->faker->sentence(), // Genera una frase aleatoria como carga
        ];
    }
}
