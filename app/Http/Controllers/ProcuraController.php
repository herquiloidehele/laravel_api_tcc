<?php

namespace App\Http\Controllers;

use App\Models\Procura;
use Illuminate\Http\Request;

class ProcuraController extends ModelController
{
    public function __construct() {
        $this->object = new Procura();
        $this->objectName = 'procura';
        $this->objectNames = 'procuras';
        $this->relactionships = ['produtores'];
    }
}
