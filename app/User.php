<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    //LAS COLUMNAS EDITABLES DE LA TABLA USUARIOS
    protected $fillable = [
        'nombre', 'apellido', 'email', 'telefono', 'password',
    ];
    //LA COLUMNA PASSWORD NO SE MUESTRA EN LA CONSULTA
    protected $hidden = [
        'password', 'remember_token',
    ];
}
