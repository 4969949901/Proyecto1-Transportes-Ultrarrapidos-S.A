<?php

namespace Database\Seeders;

use App\Models\Pilotos;
use Illuminate\Database\Seeder;

class PilotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pilotos::factory(15)->create();
      /*  $piloto=new Pilotos();

        $piloto->nombre='';
        $piloto->apellido='';
        $piloto->numero_dpi='';
        $piloto->numero_licencia='';
        $piloto->save();*/
    }
}
