<?php

namespace App\Http\Controllers\sistema;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SistemaController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password', 'activo');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin/dash');
        }else{
            return redirect()->back()->withErrors(['email'=>"Esta cuenta de correo no esta registrada.", 'password'=>'Contraseña inválida'], 'login');
        }
    }
    public function dash(){
        return view('admin.dash');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('admin/login');
    }
}
