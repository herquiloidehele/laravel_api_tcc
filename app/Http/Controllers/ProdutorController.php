<?php

namespace App\Http\Controllers;

use App\Models\Produtor;
use Illuminate\Http\Request;

class ProdutorController extends ModelController
{
    public function __construct() {
        $this->object = new Produtor();
        $this->objectName = 'produtor';
        $this->objectNames = 'produtores';
        $this->relactionships = ['user', 'telefone', 'localizacao', 'produtosQueProduz', 'ofertas', 'procuras'];
    }
}
