<?php

use Faker\Generator as Faker;

$factory->define(GestionFlotas\DatoVehiculo::class, function (Faker $faker) {
	 static $number = 1;
    return [
         'iddatosvehiculo' 						=> $number++,
         'nro_placa' 							=> str_random(6),
         'idagencia' 							=> rand(1,3),
         'iddepartamento_cargo' 				=> rand(1,6),
         'idcentro_costo' 						=> rand(1,5),
         'idtipovehiculo' 						=> rand(1,2),
         'anio_fabricacion_vehiculo' 			=> 2016,
         'idtipomodelo' 						=> rand(1,10),
         'anio_modelo_vehiculo' 			    => 2017,
         'color'								=> $faker->word(5),
         'nro_serie_motor'						=> $faker->swiftBicNumber(10),
         'idtipo_carroceria'					=> rand(1,2),
         'nro_chasis'							=> $faker->swiftBicNumber(10),
         'fuerza_vehiculo'						=> $faker->numberBetween(10,20),
         'idtipo_combustible'					=> rand(1,4),
         'ruta_imagen'							=> $faker->imageUrl($width = 500, $height = 400),
         'nombre_imagen'						=> $faker->imageUrl($width = 500, $height = 400),
         'idusuario' 							=> 1,
         'estado' 								=> 1,

    ];
});
