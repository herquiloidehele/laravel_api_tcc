<?php
include "vendor/autoload.php";
use Crada\Apidoc\Builder;
use Crada\Apidoc\Exception;

$classes = array(
    'App\Http\Controllers\UserController',
    'App\Http\Controllers\ProdutoController',
    'App\Http\Controllers\MercadoController',
    'App\Http\Controllers\ProcuraController',
    'App\Http\Controllers\ProdutorController',
    'App\Http\Controllers\RevendedorController',
    'App\Http\Controllers\UnidadeMedidaController',
    'App\Http\Controllers\CategoriaProdutoController',
);

$output_dir  = __DIR__.'/resources/views';
$output_file = 'api.blade.php'; // defaults to index.html

try {
    $builder = new Builder($classes, $output_dir, 'API Agri', $output_file);
    $builder->generate();
} catch (Exception $e) {
    echo 'There was an error generating the documentation: ', $e->getMessage();
}
