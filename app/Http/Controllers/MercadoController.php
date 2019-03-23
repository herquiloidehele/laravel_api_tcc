<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Mercado;
use Illuminate\Http\Request;

class MercadoController extends ModelController
{
    public function __construct() {
        $this->object = new Mercado();
        $this->objectName = 'mercado';
        $this->objectNames = 'mercados';
        $this->relactionships = ['revendedores', 'distrito'];
    }


    public function store(Request $request)
    {
        $mercado = $request->get('mercado');
            $mercado2 = $this->object->create(['designacao' => $mercado['designacao'], 'distritos_id' => $request->get('distritos_id')]);
            if($mercado2)
                return Auxiliar::retornarDados($this->objectName, $mercado2, 200);
            else
                return Auxiliar::retornarErros('Erro ao criar o mercao', 404);
    }


}
