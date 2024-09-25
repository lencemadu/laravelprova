<?php

use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;


Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]);

Route::get('/listar_produtos', [ProdutoController::class, 'listar']);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

Route::get('/cadastro_usuario', [UserController::class, "formCriarUsuario"]);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

Route::get('/cadastro_cliente', [ClienteController::class, "formCriarCliente"]);

Route::get('/listar_clientes', [ClienteController::class, 'listar']);

Route::post('/criar_cliente', [ClienteController::class, 'criar']);

Route::get('/cadastro_vendedor', [VendedorController::class, "formCriarVendedor"]);

Route::get('/listar_vendedors', [VendedorController::class, 'listar']);

Route::post('/criar_vendedor', [VendedorController::class, 'criar']);