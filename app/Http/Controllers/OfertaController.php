<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\NomesOfertas;
use App\Models\Oferta;
use App\Models\Produto;
use App\Models\Produtore;
use App\Models\Produz;
use App\Models\Revendedore;
use App\Models\UnidadesMedida;
use Illuminate\Http\Request;
use Mockery\Exception;

class OfertaController extends ModelController
{
    public function __construct() {
        $this->object = new Oferta();
        $this->objectName = 'oferta';
        $this->objectNames = 'ofertas';
        $this->relactionships = ['produtore' => function($query){ $query->with('user'); }, 'imagens', 'distrito', 'produto', 'unidades_medida'];
    }

    public function store(Request $request){

        $ofertaRequest = json_decode(json_encode($request->get('oferta')));

            $oferta = Oferta::create(
                [
                    'produtos_id' => $ofertaRequest->produtos_id,
                    'produtores_id' => $ofertaRequest->produtores_id,
                    'preco' => $ofertaRequest->preco,
                    'quantidade' => $ofertaRequest->quantidade,
                    'estado' => 1,
                    'unidades_medidas_id' => $ofertaRequest->unidades_medidas_id,
                    'is_preco_unidade' => $ofertaRequest->is_preco_unidade,
                    'distritos_id' => $ofertaRequest->distritos_id,
                    'descricao' => $ofertaRequest->descricao,
                    'designacao' => $this->getDesignacao($ofertaRequest),
                ]
            );
            if($oferta){
                $this->adicionarProduto($oferta->produtos_id, $oferta->produtores_id);
                ['oferta' => $oferta];
            }else
                return ['erro' =>  new \Exception("Erro ao criar Oferta", 500)];

    }


    public function getOfertasProdutor($produtores_id){
        if(!$produtores_id)
            throw new Exception('produtor_id invalido', 404);

        $produtor = Produtore::where('id', '=', $produtores_id)->first();
        $ofertas = collect($produtor->ofertas)->all();

        return ['ofertas' => $ofertas];
    }


    private function adicionarProduto($produtos_id, $produtores_id){

        if(Produz::where('produtores_id', '=', $produtores_id)->where('produtos_id', '=', $produtos_id)->count() == 0){
            $producao = Produz::create([
                'produtos_id' => $produtos_id,
                'produtores_id' => $produtores_id
            ]);
        }
    }

    private function getDesignacao($oferta){

        if($oferta->designacao == '' or $oferta->designacao == null){
            return NomesOfertas::getDesegnacao($oferta);
        }
        return $oferta->designacao;
    }

    public function getAllOfertas()
    {
        $ofertas = collect(Oferta::orderBy('id', 'desc')->get());
        $ofertasCompletas = collect();

        foreach ($ofertas as $oferta){
            $ofertasCompletas->push(
                [
                    'id' => $oferta->id,
                    'produtor' => Produtore::find($oferta->produtores_id),
                    'produto' => Produto::find($oferta->produtos_id),
                    'unidade_medida' => UnidadesMedida::find($oferta->unidades_medidas_id),
                    'tipo_preco' => $oferta->tipo_preco,
                    'preco_unidade' => $oferta->preco_unidade,
                    'preco' => $oferta->preco,
                    'quantidade' => $oferta->quantidade,
                    'data_fim' => $oferta->data_fim,
                    'estado' => $oferta->estado,
                    'created_at' => $oferta->created_at,
                    'parcelas' => $oferta->parcelamentos
                ]
            );
        }

        return ['ofertas' => $ofertasCompletas];
    }



    public function getOfertasRevendedores($revendedores_id){
        $interessesRevendedor = collect(Revendedore::find($revendedores_id)->interesses);
        $allOfertas = collect($this->getAllOfertas());

        return ['ofertas' => ($this->selecionarOfertas($interessesRevendedor, $allOfertas))];
    }


    /**
     * Selecoina as ofertas que devem ser mostradas ao revendedor de a cordo com os seus interesses
     * @param $interesses
     * @param $ofertas
     */
    private function selecionarOfertas($interesses, $ofertas){


        $ofertasSelecionadas = collect();

        foreach ($ofertas->get('ofertas') as $oferta) {
            foreach ($interesses as $interesse) {
                if($oferta['produto']['id'] == $interesse['id'])
                    $ofertasSelecionadas->push($oferta);
            }
        }

        return $ofertasSelecionadas;
    }


    /**
     * Busca todos todas as publicacoes / ofertas que sao
     * de uma determinada categoria de produtos
     * @param $idCategoria
     * @return array
     */
    public function getPublicacaoCategoria($idCategoria){

        return [
            'ofertas' => Oferta::with($this->relactionships)->whereHas('produto', function($query) use ($idCategoria){
              $query->with('categoria')->whereHas('categoria', function ($query) use ($idCategoria){
                  $query->where('id', '=', $idCategoria);
              });
            })->orderBy('updated_at', 'desc')->get()
        ];
    }


    public function addVisualizacoes(Request $request){

        $oferta = Oferta::where('id', '=', $request->id)->first();

        if($oferta){
            $oferta->visualizacoes += 1;
            $oferta->update();
        }


        return [
            'visualizacoes' => $oferta->visualizacoes ? $oferta->visualizacoes : 0
        ];
    }


}
