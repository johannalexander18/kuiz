<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamioneroController;

Route::get('/', function () {
    return view('welcome');
});
// Rutas para Camioneros
Route::get('camioneros/listar', [CamioneroController::class, 'index'])->name('camionero.index');
Route::get('camionero/create', [CamioneroController::class, 'create']);
Route::post('camionero/store', [CamioneroController::class, 'store'])->name('camionero.store');
Route::get('camionero/{camionero}', [CamioneroController::class, 'show'])->name('camionero.show');
Route::get('camionero/{camionero}/editar', [CamioneroController::class, 'edit'])->name('camionero.edit');
Route::put('camionero/{camionero}', [CamioneroController::class, 'update'])->name('camionero.update');
Route::delete('camionero/{camionero}', [CamioneroController::class, 'destroy'])->name('camionero.destroy');
