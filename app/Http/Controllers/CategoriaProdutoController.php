<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Categoria();
        $this->objectName = 'categoria';
        $this->objectNames = 'categorias';
        $this->relactionships = ['produtos'];
    }


}
