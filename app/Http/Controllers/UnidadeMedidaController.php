<?php

namespace App\Http\Controllers;

use App\Models\UnidadeMedida;
use Illuminate\Http\Request;

class UnidadeMedidaController extends ModelController
{
    public function __construct() {
        $this->object = new UnidadeMedida();
        $this->objectName = 'unidade_medida';
        $this->objectNames = 'unidades_medidas';
        $this->relactionships = [];
    }
}
