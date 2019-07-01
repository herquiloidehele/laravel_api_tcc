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


    /** @ApiDescription (section = Mercados, description="Cria um novo Mercado")
     * @ApiMethod(type="Post")
     * @ApiRoute(name="/mercados")
     * @ApiHeaders(name="Content-Type", type="application/json")
     * @ApiParams(name="designacao", type="string", nullable=false, description="Nome do mercado")
     * @ApiParams(name="distritos_id", type="integer", nullable=false, description="Id do Distrito")
     */
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
     * @ApiDescription (section = Mercados, description="Retorna todos os produtos que sao vendidos em um determinado mercado")
     * @ApiMethod(type="get")
     * @ApiRoute(name="/mercados/{id}/todos-produtos")
     * @ApiHeaders(name="Content-Type", type="application/json", descriptoin="Tipo de conteudo")
     * @ApiParams(name="id", type="integer", nullable=false, description="Id do mercado")
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
     * @ApiDescription (section = Mercados, description="Retorna os 3 produtos mais procurados em um determinado mercado")
     * @ApiMethod(type="GET")
     * @ApiParams(name="id", type="integer", nullable=false, description="Mercado ID")
     * @ApiRoute(name="/mercados/{id}/produtos-procurados")
     * @ApiHeaders(name="Content-Type", type="application/json")
     *
     *
     * @param $id_mercado
     * @return Procura[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getProdutosMaisProcurados($id_mercado)
    {
       $produtos = Procura::with([])
                ->select(['produtos.id as produto_id', \DB::raw('count(procuras.id) as procuras')])
                ->Join('produtos', 'produtos.id', '=', 'procuras.produtos_id')
                ->join('revendedores', 'revendedores.id', '=', 'procuras.revendedores_id')
                ->join('mercados', 'mercados.id', '=', 'revendedores.mercados_id')
                ->where('revendedores.mercados_id', '=', $id_mercado)
                ->groupBy('produtos.id')
                ->orderBy('procuras', 'desc')
                ->limit(3)
                ->get();


        $produtos = $produtos->map(function($produto){
            return [
                "produto" => Produto::where('id', '=', $produto['produto_id'])->first(),
                "requisicoes" => $produto['procuras']
            ];
        });


        return ['produtos' => $produtos];
    }

    /**
     * @ApiDescription (section = Mercados, description="Retorna todos Mercados")
     * @ApiMethod(type="get")
     * @ApiRoute(name="/mercados")
     * @ApiHeaders(name="Content-Type", type="application/json", descriptoin="Tipo de conteudo")
     */
    public function getAll(Request $request)
    {
        return parent::getAll($request); // TODO: Change the autogenerated stub
    }

    /**
     * @ApiDescription (section = Mercados, description="Busca Um Determinado Mercado existente")
     * @ApiMethod(type="GET")
     * @ApiParams(name="id", type="integer", nullable=false, description="Mercado ID")
     * @ApiRoute(name="/mercados/{id}")
     * @ApiHeaders(name="Content-Type", type="application/json")
     */
    public function get($id)
    {
        return parent::get($id);
    }


    /** @ApiDescription (section = Mercados, description="Actualiza um Mercado")
     * @ApiMethod(type="put")
     * @ApiRoute(name="/mercados/{id}")
     * @ApiHeaders(name="Content-Type", type="application/json")
     * @ApiParams(name="id", type="integer", nullable=false, description="Mercado ID")
     */
    public function update(Request $object, $id)
    {
        return parent::update($object, $id); // TODO: Change the autogenerated stub
    }


    /** @ApiDescription (section = Mercados, description="Elimina um Mercado")
     * @ApiMethod(type="delete")
     * @ApiRoute(name="/mercados/{id}")
     * @ApiHeaders(name="Content-Type", type="application/json")
     * @ApiParams(name="id", type="integer", nullable=false, description="Mercado ID")
     */
    public function destroy(Request $objecto, $id)
    {
        return parent::destroy($objecto, $id); // TODO: Change the autogenerated stub
    }


}
