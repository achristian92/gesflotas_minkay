<?php

use Illuminate\Database\Seeder;
use GestionFlotas\DatoVehiculo;

class DatoVehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DatoVehiculo::class, 50)->create();
    }
}
