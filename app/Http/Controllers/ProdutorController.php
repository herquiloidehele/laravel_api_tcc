<?php

namespace App\Http\Controllers;

use App\Models\Produtor;


class ProdutorController extends ModelController
{
    public function __construct() {
        $this->object = new Produtor();
        $this->objectName = 'produtor';
        $this->objectNames = 'produtores';
        $this->relactionships = ['user', 'telefones', 'localizacao', 'produtosQueProduz', 'ofertas', 'procuras'];
    }





}
