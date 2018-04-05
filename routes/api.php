<?php

use Illuminate\Http\Request;


/**
 * Rotas para Autenticacao
 */

Route::post('login', 'userController@login');


/**
 * Rotas para Produtos
 */
Route::get('/produtos', 'ProdutoController@getAll');
Route::get('/produtos/{id}', 'ProdutoController@get');
Route::get('/produtos-search', 'ProdutoController@search');
Route::post('/produtos', 'ProdutoController@store');
Route::put('/produtos/{id}', 'ProdutoController@update');
Route::delete('/produtos/{id}', 'ProdutoController@destroy');

/**
 * Rotas para Produtores
 */
Route::get('/produtores', 'ProdutorController@getAll');
Route::get('/produtores/{id}', 'ProdutorController@get');
Route::get('/produtores-search', 'ProdutorController@search');
Route::post('/produtores', 'ProdutorController@store');
Route::put('/produtores/{id}', 'ProdutorController@update');
Route::delete('/produtores/{id}', 'ProdutorController@destroy');


/**
 * Rotas para Cadastradores
 */
Route::get('/cadastradores', 'CadastradorController@getAll');
Route::get('/cadastradores/{id}', 'CadastradorController@get');
Route::get('/cadastradores-search', 'CadastradorController@search');
Route::post('/cadastradores', 'CadastradorController@store');
Route::put('/cadastradores/{id}', 'CadastradorController@update');
Route::delete('/cadastradores/{id}', 'CadastradorController@destroy');


/**
 * Rotas para Produtos
 */
Route::get('/categoria-produtos', 'CategoriaProdutoController@getAll');
Route::get('/categoria-produtos/{id}', 'CategoriaProdutoController@get');
Route::get('/categoria-produtos-search', 'CategoriaProdutoController@search');
Route::post('/categoria-produtos', 'CategoriaProdutoController@store');
Route::put('/categoria-produtos/{id}', 'CategoriaProdutoController@update');
Route::delete('/categoria-produtos/{id}', 'CategoriaProdutoController@destroy');


/**
 * Rotas para Produtos
 */
Route::get('/disponibilidade-produto', 'DisponibilidadeProdutoController@getAll');
Route::get('/disponibilidade-produto/{id}', 'DisponibilidadeProdutoController@get');
Route::get('/disponibilidade-produto-search', 'DisponibilidadeProdutoController@search');
Route::post('/disponibilidade-produto', 'DisponibilidadeProdutoController@store');
Route::put('/disponibilidade-produto/{id}', 'DisponibilidadeProdutoController@update');
Route::delete('/disponibilidade-produto/{id}', 'DisponibilidadeProdutoController@destroy');
