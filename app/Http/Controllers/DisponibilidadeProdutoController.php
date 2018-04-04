<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidade;
use Illuminate\Http\Request;

class DisponibilidadeProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Disponibilidade();
        $this->objectName = 'disponibilidade';
        $this->objectNames = 'disponibilidades';
        $this->relactionships = [];
    }
}
