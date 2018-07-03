<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Oferta;
use App\Models\Parcelamento;
use App\Models\Produto;
use App\Models\Produtor;
use App\Models\UnidadeMedida;
use Illuminate\Http\Request;
use Mockery\Exception;

class OfertaController extends ModelController
{
    public function __construct() {
        $this->object = new Oferta();
        $this->objectName = 'oferta';
        $this->objectNames = 'ofertas';
        $this->relactionships = ['revendedores', 'unidadeMedida'];
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


    public function SalvarParcelas(Request $request){

       foreach ($request->parcelas as $parcela){
           Parcelamento::create([
               'quantidade' =>$parcela['quantidade'],
               'preco' => $parcela['preco'],
               'unidades_medidas_id' => $parcela['unidade_medida']['id'],
               'ofertas_id' => $request->oferta_id
        ]);
       }

       return ['parcelas' => Parcelamento::where('ofertas_id', $request->oferta_id)->get()];
    }



    public function getMinhasOfertas($produtores_id){
        if(!$produtores_id)
            throw new Exception('Produtor id invalido');

        $produtor = Produtor::find($produtores_id);
        $ofertas = collect($produtor->ofertas);

        $ofertasCompletas = collect();

        foreach ($ofertas as $oferta){
            $ofertasCompletas->push($this->getOferta($oferta));
        }

        return ['ofertas' => $ofertasCompletas];
    }


    private function getOferta($oferta){
        return [
            'produtor' => Produtor::find($oferta->pivot->produtores_id),
            'produto' => Produto::find($oferta->pivot->produtos_id),
            'unidade_medida' => UnidadeMedida::find($oferta->pivot->unidades_medidas_id),
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


    public function getAll(Request $request)
    {
        $ofertas = collect(Oferta::all());
        $ofertasCompletas = collect();

        foreach ($ofertas as $oferta){
            $ofertasCompletas->push(
                [
                    'produtor' => Produtor::find($oferta->produtores_id),
                    'produto' => Produto::find($oferta->produtos_id),
                    'unidade_medida' => UnidadeMedida::find($oferta->unidades_medidas_id),
                    'tipo_preco' => $oferta->tipo_preco,
                    'preco_unidade' => $oferta->preco_unidade,
                    'preco' => $oferta->preco,
                    'quantidade' => $oferta->quantidade,
                    'data_fim' => $oferta->data_fim,
                    'estado' => $oferta->estado,
                    'created_at' => $oferta->created_a,
                    'data' => $oferta->pivot->created_at,
                ]
            );
        }

        return ['ofertas' => $ofertasCompletas];



    }


}
