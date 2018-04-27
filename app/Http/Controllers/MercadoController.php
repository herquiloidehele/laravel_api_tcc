<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Localizacao;
use App\Models\Mercado;
use Illuminate\Http\Request;

class MercadoController extends ModelController
{
    public function __construct() {
        $this->object = new Mercado();
        $this->objectName = 'mercado';
        $this->objectNames = 'mercados';
        $this->relactionships = ['revendedores', 'localizacao'];
    }


    public function store(Request $request)
    {
        $mercado = $request->get('mercado');
        $localizacao = Localizacao::create(['latitude' => $mercado['latitude'], 'longetude' => $mercado['longitude']]);
        if($localizacao){
            $mercado2 = $this->object->create(['designacao' => $mercado['designacao'], 'localizacoes_id' => $localizacao->id]);
            if($mercado2)
                return Auxiliar::retornarDados($this->objectName, $mercado2, 200);
            else
                return Auxiliar::retornarErros('Erro ao criar o mercao', 404);
        }
        else
            return Auxiliar::retornarErros("Erro ao criar a localizacao", 404);
    }


}
