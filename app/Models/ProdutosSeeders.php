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
        ['designacao' => 'Banana',  'categoria_produtos_id'=> 1,'default_photo' => 'img/produtos/Banana.jpeg'],
        ['designacao' => 'Ananás', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Ananás.jpeg'],
        ['designacao' => 'Coco', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Coco.jpeg'],
        ['designacao' => 'Laranja', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Laranja.jpeg'],
        ['designacao' => 'Figo', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Figo.jpeg'],
        ['designacao' => 'Goiaba', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Goiaba.jpeg'],
        ['designacao' => 'Limão', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Limão.jpeg'],
        ['designacao' => 'Maçã', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Maçã.jpeg'],
        ['designacao' => 'Manga', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Manga.jpeg'],
        ['designacao' => 'Maracujá', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Maracujá.jpeg'],
        ['designacao' => 'Morango', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Morango.jpeg'],
        ['designacao' => 'Pessego', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Pessego.jpeg'],
        ['designacao' => 'Pera Maçã', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Pera Maçã.jpeg'],
        ['designacao' => 'Tangerina', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Tangerina.jpeg'],
        ['designacao' => 'Uva', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Uva.jpeg'],
        ['designacao' => 'Abobora', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abobora.jpeg'],
        ['designacao' => 'Batata Doce', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Batata Doce.jpeg'],
        ['designacao' => 'Batata Reno', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Batata Reno.jpeg'],
        ['designacao' => 'Berinjela', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Berinjela.jpeg'],
        ['designacao' => 'Beterraba', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Beterraba.jpeg'],
        ['designacao' => 'Cenoura', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Cenoura.jpeg'],
        ['designacao' => 'Mandioca', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Mandioca.jpeg'],
        ['designacao' => 'Ervilha', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Ervilha.jpeg'],
        ['designacao' => 'Pipino', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Pipino.jpeg'],
        ['designacao' => 'Pimenta', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Pimenta.jpeg'],
        ['designacao' => 'Quiabo', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Quiabo.jpeg'],
        ['designacao' => 'Tomate', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Tomate.jpeg'],
        ['designacao' => 'Cebola', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Cebola.jpeg'],
        ['designacao' => 'Batata', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Batata.jpeg'],
        ['designacao' => 'Alface', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Alface.jpeg'],
        ['designacao' => 'Brócolos', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Brócolos.jpeg'],
        ['designacao' => 'Espinafre', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Espinafre.jpeg'],
        ['designacao' => 'Couve', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Couve.jpeg'],
        ['designacao' => 'Repolho', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Repolho.jpeg'],
        ['designacao' => 'Salsa', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Salsa.jpeg'],
        ['designacao' => 'Alho', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Alho.jpeg'],
        ['designacao' => 'Milho', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Milho.jpeg'],
        ['designacao' => 'Arroz', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Arroz.jpeg'],
        ['designacao' => 'Trigo', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Trigo.jpeg'],
        ['designacao' => 'Soja', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Soja.jpeg'],
        ['designacao' => 'Cevada', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Cevada.jpeg'],
        ['designacao' => 'Feijao', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Feijao.jpeg'],
        ['designacao' => 'Castanha', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Castanha.jpeg'],
        ['designacao' => 'Amanedoim', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Amanedoim.jpeg'],


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