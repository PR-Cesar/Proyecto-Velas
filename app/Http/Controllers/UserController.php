<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        // Validar los datos del usuario (opcional pero recomendado)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'num_colaborador' => 'required|string|max:50',
            'contraseña' => 'required|string|min:8',
            'rol' => 'required|string|max:50',
        ]);

        // Crear un nuevo usuario
        $user = new User();
        $user->nombre = $request->nombre;
        $user->num_colaborador = $request->num_colaborador;
        $user->contraseña = Hash::make($request->contraseña); // Hash de la contraseña
        $user->rol = $request->rol;
        $user->save();

        return response()->json(['message' => 'Usuario creado exitosamente.']);
    }
}
