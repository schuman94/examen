<?php

//use Illuminate\Support\Facades\DB;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('clientes', ClienteController::class);
Route::resource('cuentas', CuentaController::class);
Route::resource('movimientos', MovimientoController::class);


//Route::get('alumnos/criterios/{alumno}', [AlumnoController::class, 'criterios'])->name('alumnos.criterios');

require __DIR__.'/auth.php';
