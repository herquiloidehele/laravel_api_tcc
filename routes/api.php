<?php

use Illuminate\Http\Request;


Route::post('login', 'UserController@login');
Route::post('logout', 'UserController@logout');
Route::post('get-user-token/{token}', 'UserController@getUserFromToken');


Route::get('/produtos', 'ProdutoController@getAll');
Route::get('/produtos/{id}', 'ProdutoController@get');
Route::get('/produtos-search', 'ProdutoController@search');
Route::post('/produtos', 'ProdutoController@store');
Route::put('/produtos/{id}', 'ProdutoController@update');
Route::delete('/produtos/{id}', 'ProdutoController@destroy');



Route::get('/produtores', 'ProdutorController@getAll');
Route::get('/produtores/{id}', 'ProdutorController@get');
Route::get('/produtores-search', 'ProdutorController@search');
Route::post('/produtores', 'ProdutorController@store');
Route::put('/produtores/{id}', 'ProdutorController@update');
Route::delete('/produtores/{id}', 'ProdutorController@destroy');



Route::get('/cadastradores', 'CadastradorController@getAll');
Route::get('/cadastradores/{id}', 'CadastradorController@get');
Route::get('/cadastradores-search', 'CadastradorController@search');
Route::post('/cadastradores', 'CadastradorController@store');
Route::put('/cadastradores/{id}', 'CadastradorController@update');
Route::delete('/cadastradores/{id}', 'CadastradorController@destroy');


Route::get('/categoria-produtos', 'CategoriaProdutoController@getAll');
Route::get('/categoria-produtos/{id}', 'CategoriaProdutoController@get');
Route::get('/categoria-produtos-search', 'CategoriaProdutoController@search');
Route::post('/categoria-produtos', 'CategoriaProdutoController@store');
Route::put('/categoria-produtos/{id}', 'CategoriaProdutoController@update');
Route::delete('/categoria-produtos/{id}', 'CategoriaProdutoController@destroy');



Route::get('/disponibilidade-produto', 'DisponibilidadeProdutoController@getAll');
Route::get('/disponibilidade-produto/{id}', 'DisponibilidadeProdutoController@get');
Route::get('/disponibilidade-produto-search', 'DisponibilidadeProdutoController@search');
Route::post('/disponibilidade-produto', 'DisponibilidadeProdutoController@store');
Route::put('/disponibilidade-produto/{id}', 'DisponibilidadeProdutoController@update');
Route::delete('/disponibilidade-produto/{id}', 'DisponibilidadeProdutoController@destroy');


Route::get('/epocas', 'EpocaProdutoController@getAll');
Route::get('/epocas/{id}', 'EpocaProdutoController@get');
Route::get('/epocas-search', 'EpocaProdutoController@search');
Route::post('/epocas', 'EpocaProdutoController@store');
Route::put('/epocas/{id}', 'EpocaProdutoController@update');
Route::delete('/epocas/{id}', 'EpocaProdutoController@destroy');


Route::get('/interesses-produtos', 'EpocaProdutoController@getAll');
Route::get('/interesses-produtos/{id}', 'EpocaProdutoController@get');
Route::get('/interesses-produtos-search', 'EpocaProdutoController@search');
Route::post('/interesses-produtos', 'EpocaProdutoController@store');
Route::put('/interesses-produtos/{id}', 'EpocaProdutoController@update');
Route::delete('/interesses-produtos/{id}', 'EpocaProdutoController@destroy');


Route::get('/localizacoes', 'LocalizacaoController@getAll');
Route::get('/localizacoes/{id}', 'LocalizacaoController@get');
Route::get('/localizacoes-search', 'LocalizacaoController@search');
Route::post('/localizacoes', 'LocalizacaoController@store');
Route::put('/localizacoes/{id}', 'LocalizacaoController@update');
Route::delete('/interesses-produtos/{id}', 'EpocaProdutoController@destroy');


Route::get('/categorias', 'CategoriaProdutoController@getAll');
Route::get('/categorias/{id}', 'CategoriaProdutoController@get');
Route::get('/categorias-search', 'CategoriaProdutoController@search');
Route::post('/categorias', 'CategoriaProdutoController@store');
Route::put('/categorias/{id}', 'CategoriaProdutoController@update');
Route::delete('/categorias/{id}', 'CategoriaProdutoController@destroy');
