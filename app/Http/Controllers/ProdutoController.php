<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Produto();
        $this->objectName = 'produto';
        $this->objectNames = 'produtos';
        $this->relactionships = ['categoria', 'variedades', 'epocas'];
    }






}
