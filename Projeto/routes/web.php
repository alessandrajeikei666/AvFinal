<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
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



Route::get('/criar',[ProdutoController::class,'create']);

Route::post('/criar',[ProdutoController::class,'store'])->name('produto_criar');

Route:: get('/ver/{id}', [ProdutoController::class, 'show']);

Route:: get('/editar/{id}', [ProdutoController::class, 'edit']);

Route:: post('/editar/{id}', [ProdutoController::class, 'update']) ->name('alterar_produto');

Route:: get('/deletar/{id}', [ProdutoController::class, 'delete']);

Route:: post('/deletar/{id}', [ProdutoController::class, 'destroy'])->name('excluir_produto');

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
