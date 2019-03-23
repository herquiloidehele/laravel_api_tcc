<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Interess;
use App\Models\Revendedore;
use App\Models\UnidadesMedida;
use Illuminate\Http\Request;
use Mockery\Exception;

class InteresseProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Interess();
        $this->objectName = 'interesse';
        $this->objectNames = 'interesses';
        $this->relactionships = [];
    }



    /**
     * Retorna os produtos que um determinado Revendedor tem interesse.
     * @param $produtor_id
     * @return array
     */
    public function getProdutosRevendedor($produtor_id){
        $produtos = collect(Revendedor::find($produtor_id)->interesses);
        $interesses = collect();


        foreach ($produtos->all() as $produto){
            $interesses->push([
                'produto' => $produto,
                'unidade_medida' => UnidadeMedida::find($produto->pivot->unidades_medidas_id),
                'quantidade' => $produto->pivot->quantidade_media
            ]);
        }

        return ['interesse' => $interesses ];
    }


    public function store(Request $request){

        $produz = $request->get('intresse');

        $producao = Interesse::create(
            [
                'revendedores_id' => $produz['revendedores_id'],
                'produtos_id' => $produz['produtos_id'],
                'unidades_medidas_id' => $produz['unidades_medidas_id'],
                'quantidade_media' => $produz['quantidade_media']
            ]);

        if(!$producao){
            throw new Exception('Erro ao tentar criar Produz object');
        }

        return Auxiliar::retornarDados('produz', $producao);

    }




}
