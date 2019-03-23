<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Procura;
use App\Models\Produto;
use App\Models\Produtor;
use App\Models\Revendedor;
use App\Models\UnidadeMedida;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use JWTAuth;

class ProcuraController extends ModelController
{
    public function __construct() {
        $this->object = new Procura();
        $this->objectName = 'procura';
        $this->objectNames = 'procuras';
        $this->relactionships = ['produtores'];
    }


    public function getAll(Request $request)
    {
        return Auxiliar::retornarDados('produras',  $this->getProcura(), 200);
    }



    /**
     * Retorna as procuras de produtos de acordo com os interesses de um produtor
     * @param Request $produtosInteressados
     */
    public function getAllOfProdutos(Request $request){
        $produtor = User::find(JWTAuth::toUser($request->token)->id)->produtor;

        $revendedorProcuras = $this->getProcura();
        $produtorProducoes = $this->getProdutosDoProdutor($produtor->id);

        $requisicoesProdutos = collect();


        foreach ($revendedorProcuras as $revendedores){
            foreach ($revendedores['procura'] as $procura){
                if($this->getProdutosRequisitados($produtorProducoes, $procura))
                    $requisicoesProdutos->push(['revendedor' => $revendedores['revendedor'], 'procura' => $procura]);
            }
        }


        return $requisicoesProdutos;
    }


    /**
     * compara os produtos que o produtor produz e os produtos que os mercado disponibilizam
     * @param $produtorProducao
     * @param $procura
     * @return bool
     */
    private function getProdutosRequisitados($produtorProducao, $procura){

        foreach ($produtorProducao['produz'] as $produtorProduz) {
            if ($produtorProduz['produto']['designacao'] == $procura['produto']['designacao'])
//                if($produtorProduz['unidade_medida']['designacao'] == $procura['unidade_medida']['designacao'])
                    return true;
        }

        return false;

    }

    /**
     *Retorna a lista de revendedores e os produtos que eles procuram ou requisitam
     * @param $produto_id
     * @param $produtosQueProduz
     * @return array
     */
    private function getProcura(){
        $revendedores = Revendedor::all();
        $revendedorProcura = collect();

        foreach ($revendedores as $revendedor){
            $produtos = collect(Revendedor::find($revendedor->id)->procuras);


            $procura = collect();


            foreach ($produtos->all() as $produto){
                $procura->push(
                    [
                        'id' => $produto->id,
                        'produto' => $produto,
                        'unidade_medida' => UnidadeMedida::find($produto->pivot->unidades_medidas_id),
                        'quantidade' => $produto->pivot->quantidade,
                        'data_formatada' => $produto->pivot->created_at->diffForHumans(),
                        'data_pura' => $produto->created_at

                    ]);
            }

            $revendedorProcura->push(['revendedor' => Revendedor::find($revendedor->id), 'procura' => $procura]);
        }

        return $revendedorProcura;
    }


    /**
     * Retorna os produtos que um determinado produtor produz.
     * @param $produtor_id
     * @return array
     */
    private function getProdutosDoProdutor($produtor_id){
        $produtos = collect(Produtor::find($produtor_id)->produtosQueProduz);
        $prodQueProdutorProduz = collect();


        foreach ($produtos->all() as $produto){
            $prodQueProdutorProduz->push([
                'produto' => $produto,
                'unidade_medida' => UnidadeMedida::find($produto->pivot->unidades_medidas_id),
                'quantidade' => $produto->pivot->quantidade_media
            ]);
        }

        return ['produtor' => Produtor::find($produtor_id)->first(), 'produz' => $prodQueProdutorProduz ];

    }



}
