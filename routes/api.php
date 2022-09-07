<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//GetProdutos
Route::get('getProduto/', [ProdutoController::class, 'getProduto']);

//getProdutoById
Route::get('getProdutoById/{id}', [ProdutoController::class, 'getProdutoById']);

//addProdutos
Route::post('addProduto/', [ProdutoController::class, 'addProduto']);

//updateProdutos
Route::put('updateProduto/{id}', [ProdutoController::class, 'updateProduto']);

//deleteProdutos
Route::delete('deleteProduto/{id}', [ProdutoController::class, 'deleteProduto']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
