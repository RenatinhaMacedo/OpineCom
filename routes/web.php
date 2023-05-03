<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    EmpresasController,
    OpinioesController,
    UsuariosController,
    AutenticacaoController,
    AdminController
};



//Rotas Empresas

Route::middleware(['web'])->group(function () {
    Route::get('/user/home', [AdminController::class, 'home'])->name('home');
    Route::get('/entrar', [UsuariosController::class, 'login'])->name('login');
    Route::post('/entrar', [AutenticacaoController::class, 'login'])->name('login.store');

    Route::get('/usuarios/novo', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios/store', [UsuariosController::class, 'store'])->name('usuarios.store');

    Route::get('/empresas/novo', [EmpresasController::class, 'create'])->name('empresas.create');
    Route::post('/empresas', [EmpresasController::class, 'store'])->name('empresas.store');
});

Route::middleware(['auth:usr,emp'])->group(function () {


    Route::get('/', [AdminController::class, 'Admin'])->name('Admin.login');

    //Rotas Opiniões
    Route::get('/opinioes', [OpinioesController::class, 'index'])->name('opinioes.index');
    Route::get('/opinioes/novo', [OpinioesController::class, 'create'])->name('opinioes.create');
    Route::get('/opinioes/{opiniao}', [OpinioesController::class, 'show'])->name('opinioes.show');
    Route::get('/opinioes/{opiniao}/editar', [OpinioesController::class, 'edit'])->name('opinioes.edit');
    Route::post('/opinioes', [OpinioesController::class, 'store'])->name('opinioes.store');
    Route::put('/opinioes/{opiniao}', [OpinioesController::class, 'update'])->name('opinioes.update');
    Route::delete('/opinioes/{opiniao}', [OpinioesController::class, 'destroy'])->name('opinioes.destroy');

    // Rotas Empresas
    Route::get('/empresas', [EmpresasController::class, 'index'])->name('empresas.index');
    Route::get('/empresas/{empresa}', [EmpresasController::class, 'show'])->name('empresas.show');
    Route::get('/empresas/{empresa}/editar', [EmpresasController::class, 'edit'])->name('empresas.edit');
    Route::put('/empresas/{empresa}', [empresasController::class, 'update'])->name('empresas.update');
    Route::delete('/empresas/{empresa}', [empresasController::class, 'destroy'])->name('empresas.destroy');

    //Rotas Usuarios
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('/usuarios/{usuario}', [UsuariosController::class, 'show'])->name('usuarios.show');
    Route::get('/usuarios/editar/{usuario}', [UsuariosController::class, 'edit'])->name('usuarios.edit');

    Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');
    Route::get('/usuarios/{usuario}/destroy', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

    // Autenticação

    Route::get('/sair', [AutenticacaoController::class, 'logout'])->name('login.destroy');
});
