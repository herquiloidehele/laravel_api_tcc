<?php

use Faker\Generator as Faker;



$factory->define(\App\Models\CategoriaProduto::class, function (Faker $faker) {
    return [
        'designacao' => $faker->text(30),
    ];
});


$unidadesMedidas = ['KG', 'Saco', 'Tonelada', 'Gramas'];
$factory->define(\App\Models\UnidadeMedida::class, function (Faker $faker) use ($unidadesMedidas){
   return [
       'designacao' => $faker->unique()->randomElement($unidadesMedidas)
   ];
});

//==================================++++++============================++++=============================


$factory->define(\App\Models\Produto::class, function (Faker $faker){
    return [
        'designacao' => $faker->text(30),
        'categoria_produtos_id' => $faker->numberBetween(1, \App\Models\CategoriaProduto::all()->count())
    ] ;
});

$factory->define(\App\Models\Variedade::class, function (Faker $faker){
   return [
      'designacao' => $faker->text(30),
       'produtos_id' => $faker->numberBetween(1, \App\Models\Produto::all()->count())
   ] ;
});


$meses = ['Janeiro', 'Fevereiro', 'Marco', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
$factory->define(\App\Models\Epoca::class, function (Faker $faker) use ($meses){
    return [
        'mes_inicio' => $faker->randomElement($meses),
        'mes_fim' => $faker->randomElement($meses),
        'produtos_id' => $faker->numberBetween(1, \App\Models\Produto::all()->count())
    ];
});


$factory->define(\App\Models\ProdutoUnidadeMedida::class, function (Faker $faker){
    return [
        'produtos_id' => $faker->numberBetween(1, \App\Models\Produto::all()->count()),
        'unidades_medidas_id' => $faker->numberBetween(1, \App\Models\UnidadeMedida::all()->count())
    ];
});


$factory->define(\App\Models\Oferta::class, function (Faker $faker){
    return [
        'produtores_id' => $faker->numberBetween(1, \App\Models\Produtor::all()->count()),
        'produtos_unidades_medidas_id' => $faker->numberBetween(1, \App\Models\UnidadeMedida::all()->count()),
        'preco' => $faker->numberBetween(1000, 50000),
        'quantidade' => $faker->randomNumber(2),
    ] ;
});

$factory->define(\App\Models\Produz::class, function (Faker $faker){
    return [
        'produtores_id' => $faker->numberBetween(1, \App\Models\Produtor::all()->count()),
        'produtos_unidades_medidas_id' => $faker->numberBetween(1, \App\Models\UnidadeMedida::all()->count()),
        'quantidade_media' => $faker->randomNumber(2),
    ] ;
});


$factory->define(\App\Models\Interesse::class, function (Faker $faker){
    return [
        'revendedores_id' => $faker->numberBetween(1, \App\Models\Revendedor::all()->count()),
        'produtos_unidades_medidas_id' => $faker->numberBetween(1, \App\Models\UnidadeMedida::all()->count()),
        'quantidade_media' => $faker->randomNumber(2),
    ] ;
});

$factory->define(\App\Models\Procura::class, function (Faker $faker){
    return [
        'revendedores_id' => $faker->numberBetween(1, \App\Models\Revendedor::all()->count()),
        'produtos_unidades_medidas_id' => $faker->numberBetween(1, \App\Models\UnidadeMedida::all()->count()),
        'quantidade' => $faker->randomNumber(2),
        'data_fim' => $faker->date(),
        'estado' => $faker->boolean(50),
    ] ;
});


$factory->define(\App\Models\Disponibilidade::class, function (Faker $faker){
    return [
        'procuras_id' => $faker->numberBetween(1, \App\Models\Procura::all()->count()),
        'produtores_id' => $faker->numberBetween(1, \App\Models\Produtor::all()->count()),
        'quantidade' => $faker->randomNumber(2),
        'preco' => $faker->numberBetween(1000, 50000),
    ] ;
});


$factory->define(\App\Models\Reserva::class, function (Faker $faker){
    return [
        'revendedores_id' => $faker->numberBetween(1, \App\Models\Revendedor::all()->count()),
        'ofertas_id' => $faker->numberBetween(1, \App\Models\Oferta::all()->count()),
        'quantidade' => $faker->randomNumber(2),
    ] ;
});


$mercados = ['Zimpeto', 'Mercado 2', 'Mercado Municiapal', 'Mercado 4', 'Mercado 5'];
$factory->define(\App\Models\Mercado::class, function (Faker $faker) use ($mercados){

    return [
        'designacao' => $faker->randomElement($mercados),
        'localizacoes_id' => $faker->numberBetween(1, 10),
    ];
});

//=======================================================UTILIZADORES============================================
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'username' => $faker->unique()->userName,
        'password' => '12345',
        'foto' => $faker->imageUrl(),
        'estado' => $faker->boolean(100),
        'remember_token' => str_random(10),
    ];
});


$factory->define(\App\Models\Cadastrador::class, function (Faker $faker){

    return [
        'telefone' => $faker->phoneNumber,
        'users_id' => $faker->numberBetween(1, 5),
    ];
});

$factory->define(\App\Models\Revendedor::class, function (Faker $faker){

    return [
        'users_id' => $faker->numberBetween(6, 30),
        'mercados_id' => $faker->numberBetween(1, \App\Models\Mercado::all()->count()),
    ];
});


$factory->define(\App\Models\Produtor::class, function (Faker $faker){

    return [
        'users_id' => $faker->numberBetween(31, 60),
        'localizacoes_id' => $faker->numberBetween(11, \App\Models\Localizacao::all()->count()),
    ];
});


//=========================================CONTACTOS E LOCALIZACAO=========================================

$factory->define(\App\Models\TelefoneRevendedor::class, function (Faker $faker){

    return [
        'designacao' => $faker->phoneNumber,
        'revendedores_id' => $faker->numberBetween(1, \App\Models\Revendedor::all()->count()),
    ];
});


$factory->define(\App\Models\TelefoneProdutor::class, function (Faker $faker){

    return [
        'designacao' => $faker->phoneNumber,
        'produtores_id' => $faker->numberBetween(1, \App\Models\Produtor::all()->count()),
    ];
});

$factory->define(\App\Models\Localizacao::class, function (Faker $faker){

    return [
        'poligono' => $faker->numberBetween(10000, 2000000),
        'latitude' => $faker->latitude,
        'longetude' => $faker->longitude,
    ];
});

