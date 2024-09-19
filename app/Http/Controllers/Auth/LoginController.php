<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    $credentials = $request->only('num_colaborador', 'contraseña');

    if (Auth::attempt($credentials)) {
        dd($credentials);
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'num_colaborador' => 'Las credenciales son incorrectas.',


    ]);
    }
}

