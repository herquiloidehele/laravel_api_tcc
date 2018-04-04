<?php

namespace App\Http\Controllers;

use App\Models\TelefoneRevendedor;
use Illuminate\Http\Request;

class TelefoneRevendedorController extends ModelController
{
    public function __construct() {
        $this->object = new TelefoneRevendedor();
        $this->objectName = 'epoca';
        $this->objectNames = 'epocas';
        $this->relactionships = ['revendedor'];
    }
}
