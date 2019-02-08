<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Oferta;
use App\Models\Produto;
use App\Models\Produtore;
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
        $this->relactionships = ['produtore', 'imagens', 'distrito', 'produto', 'unidades_medida'];
    }





    public function store(Request $request){

        $ofertaRequest = $request->get('oferta');

        try {
            $oferta = Oferta::create(
                [
                    'produtos_id' => $ofertaRequest['produto']['id'],
                    'produtores_id' => $request->get('produtor_id'),
                    'preco' => $ofertaRequest['preco'],
                    'quantidade' => $ofertaRequest['quantidade'],
                    'data_fim' => $ofertaRequest['data_fim'],
                    'estado' => 1,
                    'preco_unidade' => $ofertaRequest['preco_unidade'],
                    'tipo_preco' => $ofertaRequest['tipo_preco'],
                    'unidades_medidas_id' => $ofertaRequest['unidades_medidas']['id']
                ]
            );
            return ['oferta' => $oferta];
        }catch(\Exception $ex){
            return ['erro' => $ex];
        }

    }




    public function getMinhasOfertas($produtores_id){
        if(!$produtores_id)
            throw new Exception('Produtor id invalido');

        $produtor = Produtore::find($produtores_id);
        $ofertas = collect($produtor->ofertas);

        $ofertasCompletas = collect();

        foreach ($ofertas as $oferta){
            $ofertasCompletas->push($this->getOferta($oferta));
        }

        return ['ofertas' => $ofertasCompletas];
    }


    private function getOferta($oferta){
        return [
            'produtor' => Produtore::find($oferta->pivot->produtores_id),
            'produto' => Produto::find($oferta->pivot->produtos_id),
            'unidade_medida' => UnidadesMedida::find($oferta->pivot->unidades_medidas_id),
            'tipo_preco' => $oferta->pivot->tipo_preco,
            'preco_unidade' => $oferta->pivot->preco_unidade,
            'preco' => $oferta->pivot->preco,
            'quantidade' => $oferta->pivot->quantidade,
            'data_fim' => $oferta->pivot->data_fim,
            'estado' => $oferta->pivot->estado,
            'created_at' => $oferta->pivot->created_at,
            'data' => $oferta->pivot->created_at,
        ];
    }


    public function getAllOfertas()
    {
        $ofertas = collect(Oferta::orderBy('id', 'desc')->get());
        $ofertasCompletas = collect();

        foreach ($ofertas as $oferta){
            $ofertasCompletas->push(
                [
                    'id' => $oferta->id,
                    'produtor' => Produtor::find($oferta->produtores_id),
                    'produto' => Produto::find($oferta->produtos_id),
                    'unidade_medida' => UnidadeMedida::find($oferta->unidades_medidas_id),
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
        $interessesRevendedor = collect(Revendedor::find($revendedores_id)->interesses);
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






}
