<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use  App\Model;
use Faker\Generator as Faker;


    $factory->define(Model::class|mi-proyecto-laravel|Estudiante::class, function (Faker $faker) {
        return [

            'nombre' => $faker->FirtName,
            'apellido' => $faker ->lastName,
            'nota'=> $faker ->numberBetween(0,100),
            'Fecha Nacimiento' => $faker ->dateTimeBetween('-40 years','-16 years'),
            'identidad' => $faker ->numerify('####') . $faker-> numberBetween(1950, 2005). $faker->numerify('####'),
            'cuenta' => $faker -> numberBetween(2007,2020) . $faker -> numerify('###3')

            //
        ];


});

