<?php

namespace App\Http\Controllers;

use App\Models\ProdutoUnidadeMedida;
use Illuminate\Http\Request;

class ProdutoUnidadeMedidaController extends ModelController
{
    public function __construct() {
        $this->object = new ProdutoUnidadeMedida();
        $this->objectName = 'produto_unidade_medida';
        $this->objectNames = 'produtos_unidades_medidas';
        $this->relactionships = ['produzidosPor', 'oferta','procura', 'interesses'];
    }
}
