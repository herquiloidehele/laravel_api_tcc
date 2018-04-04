<?php

namespace App\Http\Controllers;

use App\Models\Cadastrador;
use Illuminate\Http\Request;

class CadastradorController extends ModelController
{
    public function __construct() {
        $this->object = new Cadastrador();
        $this->objectName = 'cadastrador';
        $this->objectNames = 'cadastrador';
        $this->relactionships = [];
    }
}
