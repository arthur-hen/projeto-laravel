<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

// --------------------------------------------
// ROTAS DE PERFIL (USUÁRIO AUTENTICADO)
// --------------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// --------------------------------------------
// ROTA DE LOGIN (PÚBLICA)
// --------------------------------------------
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// --------------------------------------------
// ÁREA PÚBLICA (SITE)
// --------------------------------------------

// Página principal com carros do banco
Route::get('/carros', [CarrosController::class, 'publicIndex'])->name('public.index');

// Página de detalhes de um carro (botão "Saiba mais")
Route::get('/carros/{id}', [CarrosController::class, 'show'])->name('public.carros.show');

// --------------------------------------------
// CRUD DE CLIENTES (ADMIN OU FUTURO USO)
// --------------------------------------------
Route::middleware(['auth'])->group(function () {
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/cadastrar', [ClienteController::class, 'create'])->name('clientes.cadastrar');
    Route::post('/clientes/salvar', [ClienteController::class, 'store'])->name('clientes.novo');
    Route::get('/clientes/alterar/{id}', [ClienteController::class, 'edit'])->name('clientes.alterar');
    Route::post('/clientes/atualizar/{id}', [ClienteController::class, 'update'])->name('clientes.atualizar');
    Route::get('/clientes/excluir/{id}', [ClienteController::class, 'destroy'])->name('clientes.excluir');
}); 

// --------------------------------------------
// ÁREA ADMINISTRATIVA
// --------------------------------------------
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {

    // Página inicial da área admin
    Route::get('/', [CarrosController::class, 'index'])->name('admin.index');

    // CRUD de carros
    Route::get('/carros', [CarrosController::class, 'index'])->name('admin.carros.index');
    Route::get('/carros/cadastrar', [CarrosController::class, 'create'])->name('admin.carros.cadastrar');
    Route::post('/carros', [CarrosController::class, 'store'])->name('admin.carros.salvar');
    Route::get('/carros/editar/{id}', [CarrosController::class, 'edit'])->name('admin.carros.editar');
    Route::put('/carros/atualizar/{id}', [CarrosController::class, 'update'])->name('admin.carros.atualizar');
    Route::delete('/carros/excluir/{id}', [CarrosController::class, 'destroy'])->name('admin.carros.excluir');
});
