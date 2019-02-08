<?php

namespace App\Http\Controllers;

use App\Models\UnidadesMedida;

class UnidadeMedidaController extends ModelController
{
    public function __construct() {
        $this->object = new UnidadesMedida();
        $this->objectName = 'unidade_medida';
        $this->objectNames = 'unidades_medidas';
        $this->relactionships = [];
    }
}
