<?php

use Illuminate\Database\Seeder;
use GestionFlotas\DatoConductor;
class DatoConductorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(DatoConductor::class, 25)->create();


        

        DatoConductor::create([
         'iddtconductores' 				=> 1,
         'nombres_apellidos' 			=> 'SIN ASIGNAR',
         'nro_dni' 						=> 00000000,
         'codigo_trabajador'			=> 'SINCODIGO',
         'nro_serie_casco' 				=> 0,
         'sexo' 						=> '-',
         'idusuario' 					=> 1,
        ]);
        
        factory(DatoConductor::class, 50)->create();
    }
}
