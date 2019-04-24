<?php

use Illuminate\Http\Request;


Route::post('user/produtor', 'UserController@createProdutor');
Route::post('login', 'UserController@login');
Route::get('user/verify-numbem/{numero}', 'UserController@verifyNumber');
Route::post('get-user-token/{token}', 'UserController@getUserFromToken');


Route::get('/produtos', 'ProdutoController@getAll');
Route::get('/produtos/{id}', 'ProdutoController@get');
Route::get('/produtos-search', 'ProdutoController@search');
Route::post('/produtos', 'ProdutoController@store');
Route::put('/produtos/{id}', 'ProdutoController@update');
Route::delete('/produtos/{id}', 'ProdutoController@destroy');
Route::post('/produtos/pro', 'ProdutoController@destroy');



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
Route::get('/disponibilidade-produto/produtores/{procura_id}', 'DisponibilidadeProdutoController@getProdutores');
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


Route::get('/interesses-produtos', 'InteresseProdutoController@getAll');
Route::get('/interesse/revendedor_id/{revendedor_id}', 'InteresseProdutoController@getProdutosRevendedor');
Route::get('/interesses-produtos/{id}', 'InteresseProdutoController@get');
Route::get('/interesses-produtos-search', 'InteresseProdutoController@search');
Route::post('/interesses-produtos', 'InteresseProdutoController@store');
Route::put('/interesses-produtos/{id}', 'InteresseProdutoController@update');
Route::delete('/interesses-produtos/{id}', 'InteresseProdutoController@destroy');


Route::get('/localizacoes', 'LocalizacaoController@getAll');
Route::get('/localizacoes/{id}', 'LocalizacaoController@get');
Route::get('/localizacoes-search', 'LocalizacaoController@search');
Route::post('/localizacoes', 'LocalizacaoController@store');
Route::put('/localizacoes/{id}', 'LocalizacaoController@update');
Route::delete('/localizacoes/{id}', 'LocalizacaoController@destroy');


Route::get('/categorias', 'CategoriaProdutoController@getAll');
Route::get('/categorias/{id}', 'CategoriaProdutoController@get');
Route::get('/categorias-search', 'CategoriaProdutoController@search');
Route::post('/categorias', 'CategoriaProdutoController@store');
Route::put('/categorias/{id}', 'CategoriaProdutoController@update');
Route::delete('/categorias/{id}', 'CategoriaProdutoController@destroy');


Route::get('/revendedores', 'RevendedorController@getAll');
Route::get('/revendedores/{id}', 'RevendedorController@get');
Route::get('/revendedores-search', 'RevendedorController@search');
Route::post('/revendedores', 'RevendedorController@store');
Route::put('/revendedores/{id}', 'RevendedorController@update');
Route::delete('/revendedores/{id}', 'RevendedorController@destroy');


Route::get('/mercados', 'MercadoController@getAll');
Route::get('/mercados/{id}', 'MercadoController@get');
Route::get('/mercados/{id_mercado}/todos-produtos', 'MercadoController@getProdutosMercado');
Route::get('/mercados/{id_mercado}/produtos-procurados', 'MercadoController@getProdutosMaisProcurados');
Route::get('/mercados-search', 'MercadoController@search');
Route::post('/mercados', 'MercadoController@store');
Route::put('/mercados/{id}', 'MercadoController@update');
Route::delete('/mercados/{id}', 'MercadoController@destroy');



Route::get('/unidades-medidas', 'UnidadeMedidaController@getAll');
Route::get('/unidades-medidas/{id}', 'UnidadeMedidaController@get');
Route::get('/unidades-medidas-search', 'UnidadeMedidaController@search');
Route::post('/unidades-medidas', 'UnidadeMedidaController@store');
Route::put('/unidades-medidas/{id}', 'UnidadeMedidaController@update');
Route::delete('/unidades-medidas/{id}', 'UnidadeMedidaController@destroy');


Route::get('/procuras', 'ProcuraController@getAll');
Route::post('/procuras/produtos-produtor', 'ProcuraController@getAllOfProdutos');
Route::get('/procuras/{id}', 'ProcuraController@get');
Route::get('/procuras-search', 'ProcuraController@search');
Route::post('/procuras', 'ProcuraController@store');
Route::put('/procuras/{id}', 'ProcuraController@update');
Route::delete('/procuras/{id}', 'ProcuraController@destroy');
Route::get('/procuras-semelhantes/{id}', 'ProcuraController@getProcurasSemelhantes');


Route::get('/produz/produtor-producao/{produtor_id}', 'ProduzController@getProdutosDoProdutor');
Route::get('/produz', 'ProduzController@getAll');
Route::get('/produz/{id}', 'ProduzController@get');
Route::get('/produz-search', 'ProduzController@search');
Route::post('/produz', 'ProduzController@store');
Route::put('/produz/{id}', 'ProduzController@update');
Route::delete('/produz/{id}', 'ProduzController@destroy');
Route::get('/produz/{id}/epocas', 'ProduzController@getEpocasProducao');


Route::get('/ofertas/minhas-ofertas/{provedores_id}', 'OfertaController@getMinhasOfertas');
Route::get('/ofertas/revendedor/{revendedores_id}', 'OfertaController@getOfertasRevendedores');
Route::get('/ofertas', 'OfertaController@getAll');
Route::post('/ofertas', 'OfertaController@store');
Route::get('/ofertas/produtores/{produtores_id}', 'OfertaController@getOfertasProdutor');

Route::get('/provincias', 'LocalizacaoController@getProcincias');
