<?php

use Faker\Generator as Faker;

//CONFIGURACION DEL FACTORY Y FAKER PARA CARGAR DATOS DE EJMPLO EN LA BASE DE DATOS

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
