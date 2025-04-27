<?php

use App\Http\Controllers\JugadorController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


Route::middleware(['auth'])->group(function () {
    Route::resource('equipos',  \App\Http\Controllers\EquipoController::class);
    Route::get('equipos/create', [\App\Http\Controllers\EquipoController::class, 'create'])->name('equipos.create');
    Route::post('equipos', [\App\Http\Controllers\EquipoController::class, 'store'])->name('equipos.store');

    Route::resource('jugadores',  \App\Http\Controllers\JugadorController::class);
    Route::get('jugadores/create', [\App\Http\Controllers\JugadorController::class, 'create'])->name('jugadores.create');
    Route::post('jugadores', [\App\Http\Controllers\JugadorController::class, 'store'])->name('jugadores.store');
});





require __DIR__.'/auth.php';

Route::get('prueba', function () {
    return 'hola kalid';
});
