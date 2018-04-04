<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProduto;
use Illuminate\Http\Request;

class CategoriaProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new CategoriaProduto();
        $this->objectName = 'categoria';
        $this->objectNames = 'categorias';
        $this->relactionships = ['produtos'];
    }
}
