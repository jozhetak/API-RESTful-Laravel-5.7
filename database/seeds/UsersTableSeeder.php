<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    //CONFIGURACIÓN DEL SEEDER PARA CARGAR DATOS DE EJEMPLO A LA BASE DE DATOS
    public function run()
    {
        factory(App\User::class, 120)->create();
        
        App\User::create([
            'nombre' => 'Conrado',
            'apellido' => 'Maranguello',
            'email' => 'cm@gmail.com',
            'telefono' => '2657521837',
            'password' => bcrypt('123')
        ]);
    }
}
