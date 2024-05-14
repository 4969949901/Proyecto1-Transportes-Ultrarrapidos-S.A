<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Databaseeders extends Seeder
{
    public function run()
    {
        // User::factory(10)->create();
        //Llamada de seeders para base de datos.
        $this->call(predios::class);

    }
}
