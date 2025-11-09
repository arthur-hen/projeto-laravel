<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;


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


/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Rota pública para a página de login (Breeze)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');




/*
route::get('/carros', 
[CarrosController::class, 'index']
)-> name('carros.index');
*/

Route::get('/carros', function () {
    return view('template.index', [
        'user_name' => session('user_name')
    ]);
})->name('public.index');


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


Route::middleware(['auth', 'isAdmin'])
    ->prefix('admin')
    ->group(function () {

        // Página inicial da área admin (CarrosController@index)
        Route::get('/', [CarrosController::class, 'index'])->name('admin.index');

        // CRUD de carros (opcional, mas bom manter)
        Route::get('/carros', [CarrosController::class, 'index'])->name('admin.carros.index');
        Route::get('/carros/cadastrar', [CarrosController::class, 'create'])->name('admin.carros.cadastrar');
        Route::post('/carros', [CarrosController::class, 'store'])->name('admin.carros.salvar');
        Route::get('/carros/editar/{id}', [CarrosController::class, 'edit'])->name('admin.carros.editar');
        Route::put('/carros/atualizar/{id}', [CarrosController::class, 'update'])->name('admin.carros.atualizar');
        Route::delete('/carros/excluir/{id}', [CarrosController::class, 'destroy'])->name('admin.carros.excluir');
    });