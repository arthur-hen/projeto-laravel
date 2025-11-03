<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ClienteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('/carros', 
[CarrosController::class, 'index']
)-> name('carros.index');

Route::get('/carros/cadastrar', function (){
    return view('carros.cadastrar');
});

Route::post('/carros', [CarrosController::class, 'salvarCarro']
)-> name('carros.novo');


Route::post('/carros/alterar', [CarrosController::class, 'alterarCarro']
)-> name('carros.alterar');

Route::get('/carros/{id}', [CarrosController::class, 'buscarCarro']
)-> name('carro.buscar');


// CLIENTES
Route::get('/clientes', [ClienteController::class, 'index']
) -> name('clientes.index');

Route::get('/clientes/cadastrar', [ClienteController::class, 'create']
)-> name('clientes.cadastrar');

Route::post('/clientes/salvar', [ClienteController::class, 'store']
)-> name('clientes.novo');

Route::get('/clientes/alterar/{id}', [ClienteController::class, 'edit']
)-> name('clientes.alterar');

Route::post('/clientes/atualizar/{id}', [ClienteController::class, 'update'])
-> name('clientes.atualizar');

Route::get('/clientes/excluir/{id}', [ClienteController::class, 'destroy']
)-> name('clientes.excluir');