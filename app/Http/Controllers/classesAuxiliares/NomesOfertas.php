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
            "Promoção de ". NomesOfertas::getProduto($oferta->produtos_id) .", $oferta->quantidade ". NomesOfertas::getUnidadesMedidas($oferta->unidades_medidas_id, $oferta->quantidade),
             NomesOfertas::getProduto($oferta->produtos_id) ."  $oferta->quantidade ". NomesOfertas::getUnidadesMedidas($oferta->unidades_medidas_id, $oferta->quantidade),
            "$oferta->quantidade ". NomesOfertas::getUnidadesMedidas($oferta->unidades_medidas_id, $oferta->quantidade) ." de " .NomesOfertas::getProduto($oferta->produtos_id)
        ];
        return $formas[rand(0, count($formas) - 1)];
    }


    public static function getDesignacao2($produtos_id, $preco, $quantidade, $unidades_medidas_id){

        $formas = [
            "Vendo ". NomesOfertas::getProduto($produtos_id) ." à $preco",
            "Promoção de ". NomesOfertas::getProduto($produtos_id) .", $quantidade ". NomesOfertas::getUnidadesMedidas($unidades_medidas_id,$quantidade),
            NomesOfertas::getProduto($produtos_id) ."  $quantidade ". NomesOfertas::getUnidadesMedidas($unidades_medidas_id, $quantidade),
            "$quantidade ". NomesOfertas::getUnidadesMedidas($unidades_medidas_id, $quantidade) ." de " .NomesOfertas::getProduto($produtos_id)
        ];
        return $formas[rand(0, count($formas) - 1)];
    }


    private static function getUnidadesMedidas($unidadeMedidaId, $quantidade){
        $unidadeMedida = UnidadesMedida::where('id', '=', $unidadeMedidaId)->first();
        if($quantidade == 1)
            return $unidadeMedida['abreviatura'];
        else
            return $unidadeMedida['abreviatura'];
    }

    private static function getProduto($produto_id){
        $produto = Produto::where('id', '=', $produto_id)->first();
        return $produto['designacao'];
    }


}
