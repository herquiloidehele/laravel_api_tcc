<?php

namespace App\Http\Controllers;

use App\Models\Epoca;
use Illuminate\Http\Request;

class EpocaProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Epoca();
        $this->objectName = 'epoca';
        $this->objectNames = 'epocas';
        $this->relactionships = [];
    }
}
