<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;



Route::get('/produto/novo', [App\Http\Controllers\ProdutosController::class,
'FormularioCriacao']);

Route::post('/produto/novo', [App\Http\Controllers\ProdutosController::class,
'RegistrarProduto'])->name('registrar_produto');

Route::get('/produto/ver/{id}', [App\Http\Controllers\ProdutosController::class,
 'VerProduto']);

Route::get('/produto/editar/{id}', [App\Http\Controllers\ProdutosController::class, 
'EditarProduto']);

Route::post('/produto/editar/{id}', [App\Http\Controllers\ProdutosController::class, 
'SalvarEdição'])->name('editar_produto');

Route::get('/produto/excluir/{id}', [App\Http\Controllers\ProdutosController::class, 
'ExcluirProduto']);

Route::post('/produto/excluir/{id}', [App\Http\Controllers\ProdutosController::class, 
'ConfirmarExclusão'])->name('excluir_produto');