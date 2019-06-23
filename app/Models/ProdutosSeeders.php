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
        ['designacao' => 'Banana',  'categoria_produtos_id'=> 1,'default_photo' => 'img/produtos/Banana.jpg'],
        ['designacao' => 'Ananás', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Ananás.jpg'],
        ['designacao' => 'Coco', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Coco.jpg'],
        ['designacao' => 'Laranja', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Laranja.jpeg'],
        ['designacao' => 'Figo', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Figo.jpg'],
        ['designacao' => 'Goiaba', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Goiaba.jpg'],
        ['designacao' => 'Limão', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Limão.jpeg'],
        ['designacao' => 'Maçã', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Maçã.jpg'],
        ['designacao' => 'Manga', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Manga.jpg'],
        ['designacao' => 'Maracujá', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Maracujá.jpg'],
        ['designacao' => 'Morango', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Morango.jpeg'],
        ['designacao' => 'Pessego', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Pessego.jpeg'],
        ['designacao' => 'Pera Maçã', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Pera Maçã.jpeg'],
        ['designacao' => 'Tangerina', 'categoria_produtos_id' => 1, 'default_photo' => 'img/produtos/Tangerina.jpeg'],
        ['designacao' => 'Uva', 'categoria_produtos_id'=> 1, 'default_photo' => 'img/produtos/Uva.jpeg'],
        ['designacao' => 'Abobora', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Abobora.jpg'],
        ['designacao' => 'Batata Doce', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Batata Doce.jpg'],
        ['designacao' => 'Batata Reno', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Batata Reno.jpeg'],
        ['designacao' => 'Berinjela', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Berinjela.jpg'],
        ['designacao' => 'Beterraba', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Beterraba.jpeg'],
        ['designacao' => 'Cenoura', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Cenoura.jpg'],
        ['designacao' => 'Mandioca', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Mandioca.jpg'],
        ['designacao' => 'Ervilha', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Ervilha.jpg'],
        ['designacao' => 'Pipino', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Pipino.jpeg'],
        ['designacao' => 'Pimenta', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Pimenta.jpeg'],
        ['designacao' => 'Quiabo', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Quiabo.jpeg'],
        ['designacao' => 'Tomate', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Tomate.jpg'],
        ['designacao' => 'Cebola', 'categoria_produtos_id'=> 2, 'default_photo' => 'img/produtos/Cebola.jpeg'],
        ['designacao' => 'Alface', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Alface.jpeg'],
        ['designacao' => 'Brócolos', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Brócolos.jpeg'],
        ['designacao' => 'Espinafre', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Espinafre.jpeg'],
        ['designacao' => 'Couve', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Couve.jpg'],
        ['designacao' => 'Repolho', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Repolho.jpeg'],
        ['designacao' => 'Salsa', 'categoria_produtos_id'=> 3, 'default_photo' => 'img/produtos/Salsa.jpeg'],
        ['designacao' => 'Alho', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Alho.jpeg'],
        ['designacao' => 'Milho', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Milho.jpeg'],
        ['designacao' => 'Arroz', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Arroz.jpeg'],
        ['designacao' => 'Trigo', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Trigo.jpg'],
        ['designacao' => 'Soja', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Soja.jpg'],
        ['designacao' => 'Cevada', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Cevada.jpeg'],
        ['designacao' => 'Feijao', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Feijao.jpg'],
        ['designacao' => 'Castanha', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Castanha.jpeg'],
        ['designacao' => 'Amendoim', 'categoria_produtos_id'=> 4, 'default_photo' => 'img/produtos/Amanedoim.jpg'],


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
