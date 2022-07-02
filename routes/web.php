<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\produtoController;
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
Route::match(['get', 'post'], '/', [produtoController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/cadastrar', [clienteController::class, 'cadastrar'])->name('cadastrar');
Route::get('/carrinho', [produtoController::class, 'carrinho'])->name('carrinho');
Route::post('/carrinho/{id}', [produtoController::class, 'store'])->name('store_carrinho');
Route::get('/carrinho/confirmar', [produtoController::class, 'confirmar'])->name('confirmar');
Route::post('/carrinho/confirmar/CEP/{cep}', [produtoController::class, 'postmon']);
Route::delete('/carrinho/delete/{id}', [produtoController::class, 'delete'])->name('delete');
