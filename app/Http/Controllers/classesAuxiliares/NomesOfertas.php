<?php
/**
 * Created by PhpStorm.
 * User: herquiloidehele
 * Date: 2019-03-19
 * Time: 15:32
 */

namespace App\Http\Controllers\classesAuxiliares;


use App\Http\Controllers\DataController;
use App\Models\Produto;
use App\Models\UnidadesMedida;

class NomesOfertas
{

    public static function getDesegnacao($oferta){

        $formas = [
            "Vendo ". NomesOfertas::getProduto($oferta->produtos_id) ." à $oferta->preco",
            "Promoçao de ". NomesOfertas::getProduto($oferta->produtos_id) ." de $oferta->designacao , $oferta->quantidade ". NomesOfertas::getUnidadesMedidas($oferta->unidades_medidas_id, $oferta->quantidade),
             NomesOfertas::getProduto($oferta->produtos_id) ."  $oferta->quantidade ". NomesOfertas::getUnidadesMedidas($oferta->unidades_medidas_id, $oferta->quantidade),
            "$oferta->quantidade ". NomesOfertas::getUnidadesMedidas($oferta->unidades_medidas_id, $oferta->quantidade) ." de " .NomesOfertas::getProduto($oferta->produtos_id)
        ];
        return $formas[rand(0, count($formas) - 1)];
    }

    private static function getUnidadesMedidas($unidadeMedidaId, $quantidade){
        $unidadeMedida = UnidadesMedida::where('id', '=', $unidadeMedidaId)->first();
        if($quantidade == 1)
            return $unidadeMedida['designacao'];
        else
            return $unidadeMedida['designacao'] . "s";
    }

    private static function getProduto($produto_id){
        $produto = Produto::where('id', '=', $produto_id)->first();
        return $produto['designacao'];
    }


}