<?php

namespace App\Http\Controllers;

use App\Models\Produz;
use Illuminate\Http\Request;

class ProduzController extends ModelController
{
    public function __construct() {
        $this->object = new Produz();
        $this->objectName = 'produz';
        $this->objectNames = 'produzes';
        $this->relactionships = [];
    }
}
