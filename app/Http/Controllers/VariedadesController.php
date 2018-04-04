<?php

namespace App\Http\Controllers;

use App\Models\Variedade;
use Illuminate\Http\Request;

class VariedadesController extends ModelController
{
    public function __construct() {
        $this->object = new Variedade();
        $this->objectName = 'variedade';
        $this->objectNames = 'variedades';
        $this->relactionships = ['produto'];
    }
}
