<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends ModelController
{
    public function __construct() {
        $this->object = new Oferta();
        $this->objectName = 'oferta';
        $this->objectNames = 'ofertas';
        $this->relactionships = ['revendedores'];
    }
}
