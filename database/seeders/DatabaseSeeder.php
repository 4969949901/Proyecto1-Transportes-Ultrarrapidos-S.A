<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        //Llamada de seeders para base de datos.
        $this->call(TransportistaSeeder::class);//sirve para llamar la clase TransportistaSeeder y asi se pueda ejecutar en la Base de datos sin problema,
        //$this->call(PredioSeeder::class);
        //$this->call(BodegaSeeder::class);
        $this->call(CamionSeeder::class);
        $this->call(IngresoSeeder::class);
        //$this->call(EngresoSeeder::class);
    }
}
