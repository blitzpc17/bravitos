<?php

namespace App\Http\Controllers\sistema;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){
        return view('rh.empleados');
    }
}
