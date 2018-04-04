<?php

namespace App\Http\Controllers;

use App\Models\Localizacao;
use Illuminate\Http\Request;

class LocalizacaoProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Localizacao();
        $this->objectName = 'localizacao';
        $this->objectNames = 'localizacoes';
        $this->relactionships = [];
    }
}
