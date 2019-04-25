<?php

namespace App\Http\Controllers;

use App\Models\Revendedore;
use Illuminate\Http\Request;

class RevendedorController extends ModelController
{
    public function __construct() {
        $this->object = new Revendedore();
        $this->objectName = 'revendedor';
        $this->objectNames = 'revendedores';
        $this->relactionships = ['user', 'mercado' => function($query){
            $query->with('distrito');
        }, 'interesses', 'procuras' => function($query){
            $query->with(['produto', 'unidades_medida']);
        }];
    }
}
