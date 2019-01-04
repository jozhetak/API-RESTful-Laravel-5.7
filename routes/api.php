<?php

use Illuminate\Http\Request;

//LAS RUTAS DE LA API
Route::group([
        'middleware' => ['api', 'cors']
    ], function () {
        
        Route::resource('usuarios', 'UserController');
        Route::options('usuarios/{id}', 'UserController@update');
        Route::post('usuarios/crear', 'UserController@store');
        Route::delete('usuarios/{id}', 'UserController@destroy');
    });

