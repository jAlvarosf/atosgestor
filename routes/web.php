<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/painel', function () {
    return view('painel.index');
})->name('index');

Route::get('/painel/painel.index', function () {
    return view('painel.index');
});

Route::get('/secretaria/secretaria.pessoas', function () {
    return view('secretaria.pessoas');
});

Route::get('/financeiro/financeiro.receitas', function () {
    return view('financeiro.receitas');
});

Route::get('/financeiro/financeiro.despesas', function () {
    return view('financeiro.despesas');
});

Route::get('/financeiro/financeiro.extrato', function () {
    return view('financeiro.extrato');
});


