<?php

namespace App\Http\Controllers;

use App\Models\Interesse;
use Illuminate\Http\Request;

class InteresseProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Interesse();
        $this->objectName = 'interesse';
        $this->objectNames = 'interesses';
        $this->relactionships = [];
    }
}
