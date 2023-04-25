<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm() {
        return view('back.login');
    }

    public function login(Request $request){

//        $user = new User();
//        $user->username = $request->get('username');
//        $user->email = 'fran.garcia22@gmail.com';
//        $user->password = Hash::make($request->get('password'));
//
//        $user->save();

        $credenciales = $request->only('username', 'password');

        if(Auth::guard('web')->attempt($credenciales)){
            //si se autentifica
            $request->session()->regenerateToken();
            return redirect(route('registers.index'));
        }else{
            $error = 'Error al acceder a la aplicación.';
            return view('back.login', compact('error'));
        }
    }

    //cierra sesión
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('back.login');
    }
}
