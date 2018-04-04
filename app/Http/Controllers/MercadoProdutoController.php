<?php

namespace App\Http\Controllers;

use App\Models\Mercado;
use Illuminate\Http\Request;

class MercadoProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Mercado();
        $this->objectName = 'mercado';
        $this->objectNames = 'mercados';
        $this->relactionships = ['revendedores', 'localizacao'];
    }
}
