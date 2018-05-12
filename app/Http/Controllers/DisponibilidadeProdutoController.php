<?php

namespace App\Http\Controllers;

use App\Models\Disponibilidade;
use App\Models\Procura;
use Illuminate\Http\Request;

class DisponibilidadeProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Disponibilidade();
        $this->objectName = 'disponibilidade';
        $this->objectNames = 'disponibilidades';
        $this->relactionships = [];
    }


    /**
     * Retorna todos os produtores que procuram
     */
    public function getProdutores($procura_id){
        try{
            $procura = Procura::find($procura_id);
            return ['produtores' => $procura->produtores];
        }catch (\Exception $ex){
            return ['erro' => $ex];
        }
    }






}
