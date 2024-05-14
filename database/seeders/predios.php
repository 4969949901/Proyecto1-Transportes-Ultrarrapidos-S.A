<?php

namespace Database\Seeders;
use App\Models\Predio;

use Illuminate\Database\Seeder;

class predios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        predio::factory(15)->create();
        /*$predios=new predios();

        $predios->pais ='Juan Velasquez';
        $predios->ciudad ='Colonia la Repegua';
        $predios->direccion ='45678765';
        $predios->save();*/

        //
    }
}
