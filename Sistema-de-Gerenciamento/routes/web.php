<?php

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

namespace App\Http\Controllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AnaliseController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;
//rotar para o controller

//incial

Route::get('/', [LoginController::class, 'index'])->name('login');



Route::get('/loja', [LojaController::class, 'index'])->name('loja');
Route::post('/loja', [LojaController::class, 'create'])->name('adicionarLoja');

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
Route::post('/cliente', [ClienteController::class, 'create'])->name('adicionarCliente');

Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('fornecedor');
Route::post('/fornecedor', [FornecedorController::class, 'create'])->name('adicionarFornecedor');

Route::get('/analise', [AnaliseController::class, 'index'])->name('analise');

Route::get('/moto', [MotoController::class, 'index'])->name('moto');
Route::post('/moto', [MotoController::class, 'create'])->name('adicionarMoto');

Route::get('/venda', [VendaController::class, 'index'])->name('venda');
Route::post('/venda', [VendaController::class, 'create'])->name('adicionarVenda');

Route::get('/exporta-dados', [AnaliseController::class, 'exportarDados'])->name('exportarDados');  

