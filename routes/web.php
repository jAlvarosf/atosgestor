<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretariaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/painel', function () {
    return view('painel.index');
})->name('Index');

Route::get('/secretaria/secretaria.painel', function () {
    return view('secretaria.painel');
});

Route::resource('secretaria', SecretariaController::class);

Route::get('/secretaria/{$id}', [SecretariaController::class, 'edit']);

Route::get('/secretaria/{$id}', [SecretariaController::class, 'destroy']);

Route::get('/financeiro/financeiro.painel', function () {
    return view('financeiro.painel');
});

Route::get('financeiro/receitas/receitas.create', function () {
    return view('financeiro/receitas.create');
});
Route::get('financeiro/receitas/receitas.index', function () {
    return view('financeiro/receitas.index');
});

Route::get('financeiro/despesas/despesas.index', function () {
    return view('financeiro/despesas.index');
});

Route::get('/financeiro/financeiro.extrato', function () {
    return view('financeiro.extrato');
});
