<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Produto;
use App\Models\Produtor;
use App\Models\ProdutoUnidadeMedida;
use App\Models\Produz;
use App\Models\UnidadeMedida;
use App\User;
use Illuminate\Http\Request;
use DB;
use Mockery\Exception;

class ProduzController extends ModelController
{
    public function __construct() {
        $this->object = new Produz();
        $this->objectName = 'produz';
        $this->objectNames = 'produzes';
        $this->relactionships = [];
    }


    /**
     * Retorna os produtos que um determinado produtor diz que produz.
     * @param $produtor_id
     * @return array
     */
    public function getProdutosDoProdutor($produtor_id){
        $produtos = collect(Produtor::find($produtor_id)->produtosQueProduz);
        $prodQueProdutorProduz = collect();


        foreach ($produtos->all() as $produto){
            $prodQueProdutorProduz->push([
                'produto' => $produto,
                'unidade_medida' => UnidadeMedida::find($produto->pivot->unidades_medidas_id),
                'quantidade' => $produto->pivot->quantidade_media
            ]);
        }

        return ['produz' => $prodQueProdutorProduz ];
    }


    public function store(Request $request){

        $produz = Produz::create([
            'produtores_id' => $request->get('idProdutor'),
            'produtos_id' => $request->get('idProduto')
        ]);

        if($produz)
            return ['produz' => $produz];
        else
            throw new \Exception("Erro ao criar Produz", 500);

    }


}
