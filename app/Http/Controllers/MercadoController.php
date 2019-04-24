<?php

namespace App\Http\Controllers;

use App\Http\Controllers\classesAuxiliares\Auxiliar;
use App\Models\Interess;
use App\Models\Mercado;
use App\Models\Procura;
use App\Models\Produto;
use Illuminate\Http\Request;

class MercadoController extends ModelController
{
    public function __construct() {
        $this->object = new Mercado();
        $this->objectName = 'mercado';
        $this->objectNames = 'mercados';
        $this->relactionships = ['revendedores' => function($query){
            $query->with(['user', 'interesses', 'procuras' => function($query){
                $query->with(['distrito', 'produto', 'unidades_medida', 'revendedore']);
            }, 'mercado']);
        }, 'distrito'];
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


    /**
     * Retorna todos os produtos que sao vendidos em um determinado mercado
     *
     * @param $id_mercado
     * @return Interess[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getProdutosMercado($id_mercado)
    {

        $produtos = collect(Interess::with([])
            ->select(['produtos.id as produto_id', \DB::raw('count(revendedores.id) as revendedores')])
            ->Join('produtos', 'produtos.id', '=', 'interesses.produtos_id')
            ->join('revendedores', 'revendedores.id', '=', 'interesses.revendedores_id')
            ->join('mercados', 'mercados.id', '=', 'revendedores.mercados_id')
            ->where('revendedores.mercados_id', '=', $id_mercado)
            ->groupBy('produtos.id')
            ->orderBy('revendedores', 'desc')
            ->get());

        $produtos = $produtos->map(function($produto){
            return [
                "produto" => Produto::where('id', '=', $produto['produto_id'])->first(),
                "revendedores" => $produto['revendedores']
            ];
        });


        return ['produtos' => $produtos];
    }


    /**
     * Retorna os 3 produtos mais procurados em um determinado mercado
     * @param $id_mercado
     * @return Procura[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getProdutosMaisProcurados($id_mercado)
    {
        return
            ['produtos' => Procura::with([])
                ->select(['produtos.designacao as produto', \DB::raw('count(procuras.id) as procuras')])
                ->Join('produtos', 'produtos.id', '=', 'procuras.produtos_id')
                ->join('revendedores', 'revendedores.id', '=', 'procuras.revendedores_id')
                ->join('mercados', 'mercados.id', '=', 'revendedores.mercados_id')
                ->where('revendedores.mercados_id', '=', $id_mercado)
                ->groupBy('produtos.designacao')
                ->orderBy('procuras', 'desc')
                ->limit(3)
                ->get()
            ];
    }



}
