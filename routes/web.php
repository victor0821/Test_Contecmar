<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\AuthenticatedController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Ruta de inicio (login personalizado - no usar el welcome de Laravel)
Route::get('/', function () {
    return Inertia::render('Auth/Login');
})->name('login');



Route::post('/login', [AuthenticatedController::class, 'login']);

// Rutas protegidas (requieren autenticación)
Route::middleware('auth')->group(function () {
    // Formulario principal (CRUD de piezas)
    Route::get('/Formulario', [FormularioController::class, 'index'])->name('formulario');
    Route::post('/Formulario', [FormularioController::class, 'store']);
    
    // Reportes (Requerimiento Adicional)
    Route::get('/reportes', function () {
        return Inertia::render('Reportes');
    })->name('reportes');
    
    
    Route::post('/logout', [AuthenticatedController::class, 'destroy'])->name('logout');
});


