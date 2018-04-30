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
        $produtorUnidadesMedidas = collect(Produtor::find($produtor_id)->produtosQueProduz);
        $prodQueProdutorProduz = collect();


        foreach ($produtorUnidadesMedidas->all() as $produtoUnid){
            $prodQueProdutorProduz->push([
                'produto' => Produto::find($produtoUnid->produtos_id),
                'unidade_medida' => UnidadeMedida::find($produtoUnid->unidades_medidas_id),
                'quantidade' => $produtoUnid->pivot->quantidade_media
            ]);
        }

        return ['produz' => $prodQueProdutorProduz ];

    }


    public function store(Request $request){

        $produz = $request->get('produz');

        DB::beginTransaction();

            $produtosUnidadeMedida = ProdutoUnidadeMedida::create(
                [
                    'produtos_id' => $produz['produtos_id'],
                    'unidades_medidas_id' => $produz['unidades_medidas_id']
                ]);

            if(!$produtosUnidadeMedida){
                DB::rollBack();
                throw new \Exception('Erro ao criar produtosUnidadeMedida object');
            }

            $producao = Produz::create(
                [
                    'produtos_unidades_medidas_id' => $produtosUnidadeMedida->id,
                    'produtores_id' => $produz['produtores_id'],
                    'quantidade_media' => $produz['quantidade_media']
                ]);

            if(!$producao){
                DB::rollBack();
                throw new Exception('Erro ao tentar criar Produz object');
            }

        DB::commit();

            return Auxiliar::retornarDados('produz', $producao);

    }


}
