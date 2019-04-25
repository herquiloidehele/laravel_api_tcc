<?php

use Faker\Generator as Faker;


$categorias = \App\Models\ProdutosSeeders::getCategorias();

$factory->define(\App\Models\Categoria::class, function (Faker $faker) use ($categorias){
    $categoria = $faker->unique()->randomElement($categorias);
    return [
        'id' => $categoria['id'],
        'designacao' => $categoria['designacao'],
    ];
});


$unidadesMedidas = \App\Models\ProdutosSeeders::getUnidadesMedidas();
$factory->define(\App\Models\UnidadesMedida::class, function (Faker $faker) use ($unidadesMedidas){
    $unidadesMedida = $faker->unique()->randomElement($unidadesMedidas);
   return [
       'designacao' => $unidadesMedida['designacao'],
       'abreviatura' => $unidadesMedida['abreveatura'],
   ];
});


$produtos = \App\Models\ProdutosSeeders::getProdutos();

$factory->define(\App\Models\Produto::class, function (Faker $faker) use ($produtos){
    $produto = $faker->unique()->randomElement($produtos);
    return [
        'designacao' => $produto['designacao'],
        'categorias_id' => $produto['categoria_produtos_id'],
        'default_photo' => $produto['default_photo'],
        'estado' => 'ACTIVO'
    ] ;
});


$factory->define(\App\Models\Oferta::class, function (Faker $faker){
    return [
        'designacao' => $faker->text(50),
        'descricao' => $faker->text(150),
        'produtores_id' => $faker->numberBetween(1, \App\Models\Produtore::all()->count()),
        'produtos_id' => $faker->numberBetween(1, \App\Models\Produto::all()->count()),
        'unidades_medidas_id' => $faker->numberBetween(1, \App\Models\UnidadesMedida::all()->count()),
        'preco' => $faker->numberBetween(1000, 50000),
        'quantidade' => $faker->randomNumber(2),
        'estado' => 'DISPONIVEL',
        'negociavel' => $faker->randomElement(['SIM', 'NAO']),
        'visualizacoes' => 0,
        'distritos_id' => $faker->numberBetween(11, \App\Models\Distrito::all()->count()),
    ] ;
});


$factory->define(\App\Models\Produz::class, function (Faker $faker){
    return [
        'produtores_id' => $faker->numberBetween(1, \App\Models\Produtore::all()->count()),
        'produtos_id' => $faker->numberBetween(1, \App\Models\Produto::all()->count()),
    ] ;
});


$factory->define(\App\Models\Interess::class, function (Faker $faker){
    return [
        'revendedores_id' => $faker->numberBetween(1, \App\Models\Revendedore::all()->count()),
        'produtos_id' => $faker->numberBetween(1, \App\Models\Produto::all()->count()),
    ] ;
});


$factory->define(\App\Models\Procura::class, function (Faker $faker){

    return [
        'designacao' => $faker->text(50),
        'revendedores_id' => $faker->numberBetween(1, \App\Models\Revendedore::all()->count()),
        'produtos_id' => $faker->numberBetween(1, \App\Models\Produto::all()->count()),
        'unidades_medidas_id' => $faker->numberBetween(1, \App\Models\UnidadesMedida::all()->count()),
        'quantidade' => $faker->randomNumber(2),
        'estado' => $faker->randomElement(['ACTIVO', 'DESACTIVO']),
        'distritos_id' => $faker->numberBetween(11, \App\Models\Distrito::all()->count()),
    ] ;
});



$mercados = ['Zimpeto', 'Municipal de Maputo', 'Central de Maputo', 'Municiapal de Zavala', 'Centar de Inhambane', 'Municial de Vilanculos'];
$factory->define(\App\Models\Mercado::class, function (Faker $faker) use ($mercados){

    return [
        'designacao' => $faker->randomElement($mercados),
        'distritos_id' => $faker->numberBetween(11, \App\Models\Distrito::all()->count()),
    ];
});


$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nome' => $faker->firstName .' '.  $faker->lastName,
        'username' => $faker->unique()->phoneNumber,
        'password' => '12345',
        'foto' => $faker->imageUrl($faker->numberBetween(100, 250), $faker->numberBetween(100, 450), 'people'),
        'estado' => 1,
        'remember_token' => str_random(10),
    ];
});


$factory->define(\App\Models\Cadastradore::class, function (Faker $faker){

    return [
        'users_id' => $faker->unique()->numberBetween(1, 5),
    ];
});

$factory->define(\App\Models\Revendedore::class, function (Faker $faker){
    $user_id = $faker->unique()->numberBetween(6, 30);
    return [
        'users_id' => $user_id,
        'telefone' => \App\User::where('id', '=', $user_id)->first()['username'],
        'tipo_revendedor' => $faker->randomElement(['FABRICA', 'LOJA', 'INDIVIDUAL']),
        'mercados_id' => $faker->numberBetween(1, \App\Models\Mercado::all()->count()),
    ];
});

$factory->define(\App\Models\Imagen::class, function (Faker $faker){
    return [
        'caminho' => $faker->imageUrl($faker->numberBetween(50, 250), $faker->numberBetween(100, 450), 'food'),
        'is_principal' => $faker->numberBetween(5,10),
        'ofertas_id' => $faker->numberBetween(1, \App\Models\Oferta::all()->count()),
    ];
});


$factory->define(\App\Models\Produtore::class, function (Faker $faker){
    $user_id = $faker->unique()->numberBetween(31, 60);
    return [
        'users_id' => $user_id,
        'telefone' => \App\User::where('id', '=', $user_id)->first()['username'],
        'distritos_id' => $faker->numberBetween(11, \App\Models\Distrito::all()->count()),
    ];
});

$factory->define(\App\Models\Provincia::class, function (Faker $faker) {

    $provincias = \App\Http\Controllers\DataController::getProvinvias();
    $provincia = $faker->unique()->randomElement($provincias);
    return [
        'id' => $provincia['id'],
        'designacao' => $provincia['name']
    ];
});

$distritos = \App\Http\Controllers\DataController::getDistritos();

$factory->define(\App\Models\Distrito::class, function (Faker $faker) use ($distritos){

    $distrito = $distritos->pop();

    return [
        'designacao' => $distrito['name'],
        'provincias_id' => $distrito['in_place']['id']
    ];

});


