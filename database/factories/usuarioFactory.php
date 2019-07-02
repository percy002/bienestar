<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'DNI'=> str_random(8),
        'nombre' => $faker->fisrtname,
        'materno' => $faker->lastname,
        'paterno' => $faker->lastname,
        
        'telefono'=> $faker->phoneNumber,
        'direccion'=> $faker->address,
        'correo'=> $faker->unique()->safeEmail,
        'carreraProfesional'=>sentence($nbWords = 6),
        'genero'=>numberBetween(1,3),
        'fechaNacimiento'=>date($format = 'Y-m-d', $max = 'now'),
    ];
});
