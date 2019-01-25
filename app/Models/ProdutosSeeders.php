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
        ['designacao' => 'Abacate', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Banana',  'categoria_produtos_id'=> 1,'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Ananás', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Coco', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Laranja', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Figo', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Goiaba', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Limão', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Maçã', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Manga', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Maracujá', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Morango', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Pessego', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Pera Maçã', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Tangerina', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Uva', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Abobora', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Batata Doce', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Batata Reno', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Berinjela', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Beterraba', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Cenoura', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Mandioca', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Ervilha', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Pipino', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Pimenta', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Quiabo', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Tomate', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Cebola', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Batata', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Alface', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Brócolos', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Espinafre', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Couve', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Repolho', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Salsa', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Alho', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Milho', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Arroz', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Trigo', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Soja', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Cevada', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Feijao', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Castanha', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],
        ['designacao' => 'Amanedoim', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Abacate.jpeg'],


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