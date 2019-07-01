<?php
include "vendor/autoload.php";
use Crada\Apidoc\Builder;
use Crada\Apidoc\Exception;

$classes = array(
    'App\Http\Controllers\ProdutoController',
    'App\Http\Controllers\MercadoController',
);

$output_dir  = __DIR__.'/apidocs';
$output_file = 'api.html'; // defaults to index.html

try {
    $builder = new Builder($classes, $output_dir, 'API Agri', $output_file);
    $builder->generate();
} catch (Exception $e) {
    echo 'There was an error generating the documentation: ', $e->getMessage();
}
