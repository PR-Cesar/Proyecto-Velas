<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Ruta para la página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la página de inicio de sesión
Route::get('/login', function () {
    return view('login.index');
});

// Ruta para definir el inicio de sesión y se dirija al dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth'); // Solo accesible si el usuario está autenticado


// Ruta para procesar el inicio de sesión
Route::post('/login', [LoginController::class, 'login'])->name('login');