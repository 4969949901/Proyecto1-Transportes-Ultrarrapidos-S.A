<?php

namespace Database\Seeders;

use App\Models\Transportista;
use Illuminate\Database\Seeder;

class TransportistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transportista::factory(15)->create();
    }
}
