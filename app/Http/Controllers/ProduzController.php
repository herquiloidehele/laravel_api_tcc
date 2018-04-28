<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Produtor;
use App\Models\Produz;
use App\Models\UnidadeMedida;
use Illuminate\Http\Request;

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
        $produtorUnidadesMedidas = collect(Produtor::find($produtor_id)->produtosQueProduz);
        $prodQueProdutorProduz = collect();


        foreach ($produtorUnidadesMedidas->all() as $produtoUnid){
            $prodQueProdutorProduz->push([
                'produto' => Produto::find($produtoUnid->produtos_id),
                'unidade_medida' => UnidadeMedida::find($produtoUnid->unidades_medidas_id),
                'quantidade' => $produtoUnid->pivot->quantidade_media
            ]);
        }

        return ['produtor' => Produtor::find($produtor_id)->first(), 'produz' => $prodQueProdutorProduz ];

    }

}
