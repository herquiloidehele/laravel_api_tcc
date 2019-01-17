<?php
/**
 * Created by PhpStorm.
 * User: herquiloide
 * Date: 6/10/18
 * Time: 15:11
 */

namespace App\Models;


class ProdutosSeeders
{


    private static $categorias = [
        ['id' => 1, 'designacao' => 'Frutas'],
        ['id' => 2, 'designacao' => 'Legumes'],
        ['id' => 3, 'designacao' => 'Verduras'],
        ['id' => 4, 'designacao' => 'Grãos e Cereais'],
        ['id' => 5, 'designacao' => 'Outras'],
    ];

    private static $unidadesMedidas = [
        ['abreveatura' => 'KG','designacao' => 'Quilograma'],
        ['abreveatura' => 'SC','designacao' => 'Saco'],
        ['abreveatura' => 'TON','designacao' => 'Tonelada'],
        ['abreveatura' => 'GR','designacao' => 'Grama'],
        ['abreveatura' => 'CA','designacao' => 'Caixa'],
        ['abreveatura' => 'FR','designacao' => 'Frasco'],
        ['abreveatura' => 'UNI','designacao' => 'Unidade'],
        ['abreveatura' => 'OU','designacao' => 'Outro'],
    ];


    private static $produtos = [
        ['designacao' => 'Abacate', 'categoria_produtos_id' => 1],
        ['designacao' => 'Banana',  'categoria_produtos_id'=> 1],
        ['designacao' => 'Ananás', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Coco', 'categoria_produtos_id' => 1],
        ['designacao' => 'Laranja', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Figo', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Goiaba', 'categoria_produtos_id' => 1],
        ['designacao' => 'Limão', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Maçã', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Manga', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Manga Macã', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Maracujá', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Morango', 'categoria_produtos_id' => 1],
        ['designacao' => 'Pessego', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Pera Maçã', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Tangerina', 'categoria_produtos_id' => 1],
        ['designacao' => 'Uva', 'categoria_produtos_id'=> 1],
        ['designacao' => 'Abobora Seca', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Batata Doce', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Berinjela', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Beterraba', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Cenoura', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Mandioca', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Ervilha', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Pipino', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Pimenta', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Quiabo', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Tomate', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Cebola', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Batata', 'categoria_produtos_id'=> 2],
        ['designacao' => 'Alface', 'categoria_produtos_id'=> 3],
        ['designacao' => 'Brócolos', 'categoria_produtos_id'=> 3],
        ['designacao' => 'Espinafre', 'categoria_produtos_id'=> 3],
        ['designacao' => 'Couve', 'categoria_produtos_id'=> 3],
        ['designacao' => 'Repolho', 'categoria_produtos_id'=> 3],
        ['designacao' => 'Salsa', 'categoria_produtos_id'=> 3],
        ['designacao' => 'Alho', 'categoria_produtos_id'=> 4],
        ['designacao' => 'Milho', 'categoria_produtos_id'=> 4],
        ['designacao' => 'Arroz', 'categoria_produtos_id'=> 4],
        ['designacao' => 'Trigo', 'categoria_produtos_id'=> 4],
        ['designacao' => 'Soja', 'categoria_produtos_id'=> 4],
        ['designacao' => 'Cevada', 'categoria_produtos_id'=> 4],
        ['designacao' => 'Feijao', 'categoria_produtos_id'=> 4],
        ['designacao' => 'Castanha', 'categoria_produtos_id'=> 4],
        ['designacao' => 'Amanedoim', 'categoria_produtos_id'=> 4],


    ];



    public static function getProdutos(){
        return ProdutosSeeders::$produtos;
    }

    public static function getCategorias(){
        return ProdutosSeeders::$categorias;
    }

    public static function getUnidadesMedidas(){
        return ProdutosSeeders::$unidadesMedidas;
    }

}