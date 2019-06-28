<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Categoria;
use App\Models\Procura;
use App\Models\Produto;
use App\Models\Produtore;
use App\Models\Revendedore;
use App\Models\UnidadesMedida;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use JWTAuth;
use DB;

class ProcuraController extends ModelController
{
    public function __construct() {
        $this->object = new Procura();
        $this->objectName = 'procura';
        $this->objectNames = 'procuras';
        $this->relactionships = ['distrito', 'produto', 'unidades_medida', 'revendedore' => function($query) {$query->with('user');}];
    }


//    public function getAll(Request $request)
//    {
//        return Auxiliar::retornarDados('procuras',  $this->getProcura(), 200);
//    }



    /**
     * Retorna as procuras de produtos de acordo com os interesses de um produtor
     * @param Request $produtosInteressados
     */
    public function getAllOfProdutos(Request $request){
        $produtor = User::find($request->id)->produtor;

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



    public function getProcurasSemelhantes($id){
        $produto = Produto::find(Procura::where('id', '=', $id)->first()['produtos_id']);

        $procuras = Procura::with(['distrito', 'produto', 'unidades_medida',
                'revendedore' => function($query) {$query->with('user');}])
                            ->select('procuras.*')
                            ->join('produtos', 'produtos.id', '=', 'procuras.produtos_id')
                            ->where('produtos.categorias_id', '=', $produto['categorias_id'])
                            ->get();

        return ['procuras' => $procuras];
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
        $revendedores = Revendedore::all();
        $revendedorProcura = collect();

        foreach ($revendedores as $revendedor){
            $produtos = collect(Revendedore::find($revendedor->id)->procuras);


            $procura = collect();


            foreach ($produtos->all() as $produto){
                $procura->push(
                    [
                        'id' => $produto->id,
                        'produto' => $produto,
                        'unidade_medida' => UnidadesMedida::find($produto->pivot->unidades_medidas_id),
                        'quantidade' => $produto->pivot->quantidade,
                        'data_formatada' => $produto->pivot->created_at->diffForHumans(),
                        'data_pura' => $produto->created_at

                    ]);
            }

            $revendedorProcura->push(['revendedor' => Revendedore::find($revendedor->id), 'procura' => $procura]);
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

        return ['produtor' => Produtore::find($produtor_id)->first(), 'produzs' => $prodQueProdutorProduz ];

    }



    public function getProcurasProdutor($id){
        $produtor = Produtore::with(['distrito', 'produzs'])->where('id', '=', $id)->first();

        $produtosId = implode(',', $this->getProdutosId($produtor->produzs));
        $distrito_id = $produtor->distrito->id . '';

        return [ 'procuras' => Procura::with(
            [
            'distrito',
            'produto',
            'unidades_medida',
            'revendedore' => function($query) {$query->with('user');}
            ])
            ->orderByRaw(DB::raw("FIELD(produtos_id, $produtosId) DESC"))
            ->orderByRaw(DB::raw("FIELD(distritos_id, $distrito_id) DESC"))
            ->get()
            ];

    }


    /**
     * Retorna os ids dos produtos produzidos pelo produtor
     * @param $produz
     * @return array
     */
    private function getProdutosId($produz){
        if(count($produz) == 0)
            return [];

        $produzCollect = collect($produz);
        $produtosId = $produzCollect->map(function ($produto) {
            return $produto['produtos_id'];
        });

        return $produtosId->all();
    }


}
