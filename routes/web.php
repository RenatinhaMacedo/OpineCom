<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/empresas', [EmpresasController::class, 'index'])->name('empresas.index');


Route::get('/empresas/novo', [EmpresasController::class, 'create'])->name('empresas.create');


Route::get('/empresas/{empresa}', [EmpresasController::class, 'show'])->name('empresas.show');


Route::get('/empresas/{empresa}/editar', [EmpresasController::class, 'edit'])->name('empresas.edit');


Route::post('/empresas', [EmpresasController::class, 'store'])->name('empresas.store');


Route::put('/empresas/{empresa}', [empresasController::class, 'update'])->name('empresas.update');


Route::delete('/empresas/{empresa}', [empresasController::class, 'destroy'])->name('empresas.destroy');
