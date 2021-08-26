<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //return $next($request);

        if(auth()->user()->usuariotipoid == 1){
            return $next($request);
        }

       // return redirect('login')->whith('error', 'Acceso restringido.');
       $error = "No tienes acceso.";
       return redirect('admin/login')->with('Advertencia', 'No tienes acceso a este apartado.');
    }
}
