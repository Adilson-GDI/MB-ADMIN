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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('home');

Route::get('/produtos/list', [App\Http\Controllers\ProdutosController::class, 'index'])->name('produtos.index');
Route::get('/produtos/add', [App\Http\Controllers\ProdutosController::class, 'create'])->name('produtos.add');
Route::post('/produtos/store', [App\Http\Controllers\ProdutosController::class, 'store'])->name('produtos.store');
Route::get('/produtos/delete/{id}', [App\Http\Controllers\ProdutosController::class, 'destroy']);
Route::get('/produtos/edit/{id}', [App\Http\Controllers\ProdutosController::class, 'edit']);
Route::post('/produtos/update/{id}', [App\Http\Controllers\ProdutosController::class, 'update']);

