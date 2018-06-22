<?php

use Faker\Generator as Faker;

$factory->define(GestionFlotas\DatoConductor::class, function (Faker $faker) {
    static $number = 2;

    return [
        'iddtconductores'               => $number++,
        'nombres_apellidos' 			=> $faker->name(4),
         'nro_dni' 						=> $faker->randomNumber(8),
         'codigo_trabajador'			=> 'cod_'. $faker->word(5),
         'nro_serie_casco' 				=> $faker->randomNumber(4),
         'fecha_nacimiento' 			=> $faker->date($format = 'Y-m-d'),
         'fecha_ingreso' 				=> $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
         'sexo' 						=> $faker->randomElement(['M','F']),
         'idusuario' 					=> 1,

    ];
});
