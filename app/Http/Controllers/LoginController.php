<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'num_colaborador' => 'required|string',
            'contraseña' => 'required|string',
        ]);

        $user = User::where('num_colaborador', $request->num_colaborador)->first();

        if ($user && Hash::check($request->contraseña, $user->contraseña)) {
            Auth::login($user); // Inicia sesión
            return redirect()->route('dashboard'); // Redirige al dashboard
        }

        return back()->withErrors(['num_colaborador' => 'Credenciales incorrectas.']);
    }
}
