<?php

namespace App\Http\Middleware;

use Closure;

class Cors {
    
    //CONFIGURACIÓN DEL CORS
    public function handle($request, Closure $next) {
        
        return $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');        
    }

}