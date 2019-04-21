<?php

namespace App\Http\Controllers;

use App\Models\Produtore;


class ProdutorController extends ModelController
{
    public function __construct() {
        $this->object = new Produtore();
        $this->objectName = 'produtor';
        $this->objectNames = 'produtores';
        $this->relactionships = ['distrito', 'user', 'produtosProduzidos', 'ofertas'];
    }





}
