<?php

namespace App\Http\Controllers;

use App\Models\Revendedor;
use Illuminate\Http\Request;

class RevendedorController extends ModelController
{
    public function __construct() {
        $this->object = new Revendedor();
        $this->objectName = 'revendor';
        $this->objectNames = 'revendedores';
        $this->relactionships = ['user', 'mercado', 'telefones', 'interesses', 'procuras', 'pfertas'];
    }
}
