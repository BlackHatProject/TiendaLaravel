<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //

    public function loginPage() {
        return view('users.login');
    }

    public function loginAuth(Request $request) {
        
        $datos = request()->only('email', 'password');

        if (Auth::attempt($datos)) {

            return redirect('productos');
        }
        else {  
            return redirect('login');
        }
        
    }

    public function logout() {
        auth()->logout();
        return redirect('productos');
    }

}
