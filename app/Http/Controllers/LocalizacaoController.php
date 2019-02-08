<?php

namespace App\Http\Controllers;

use App\Models\Localiza;
use Illuminate\Http\Request;

class LocalizacaoController extends ModelController
{
    public function __construct() {
        $this->object = new Localizacao();
        $this->objectName = 'localizacao';
        $this->objectNames = 'localizacoes';
        $this->relactionships = [];
    }
}
