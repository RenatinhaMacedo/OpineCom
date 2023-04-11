<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\OpinioesController;
use App\Http\Controllers\UsuariosController;




Route::get('/', function () {
    return view('main');
});

//Rotas Empresas
Route::get('/empresas', [EmpresasController::class, 'index'])->name('empresas.index');
Route::get('/empresas/novo', [EmpresasController::class, 'create'])->name('empresas.create');
Route::get('/empresas/{empresa}', [EmpresasController::class, 'show'])->name('empresas.show');
Route::get('/empresas/{empresa}/editar', [EmpresasController::class, 'edit'])->name('empresas.edit');
Route::post('/empresas', [EmpresasController::class, 'store'])->name('empresas.store');
Route::put('/empresas/{empresa}', [empresasController::class, 'update'])->name('empresas.update');
Route::delete('/empresas/{empresa}', [empresasController::class, 'destroy'])->name('empresas.destroy');

//Rotas Usuarios
Route::get('/usuarios/list', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/novo', [UsuariosController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/{usuario}/show', [UsuariosController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{usuario}/editar', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::post('/usuarios/store', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::get('/usuarios/{usuario}/destroy', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

//Rotas Opinião
Route::get('/opinioes/index', [OpinioesController::class, 'index'])->name('opinioes.index');
Route::get('/opinioes/novo', [OpinioesController::class, 'create'])->name('opinioes.create');
Route::post('/opinioes/store', [OpinioesController::class, 'store'])->name('opinioes.store');
Route::get('/opinioes/{opiniao}/show', [OpinioesController::class, 'show'])->name('opinioes.show');
Route::get('/opinioes/{opiniao}/editar', [OpinioesController::class, 'edit'])->name('opinioes.edit');
Route::put('/opinioes/{opiniao}', [OpinioesController::class, 'update'])->name('opinioes.update');
Route::get('/opinioes/{opiniao}/destroy', [OpinioesController::class, 'destroy'])->name('opinioes.destroy');

