<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Variedade;
use Illuminate\Http\Request;
use Mockery\Exception;

class ProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Produto();
        $this->objectName = 'produto';
        $this->objectNames = 'produtos';
        $this->relactionships = ['categoria', 'variedades', 'epocas'];
    }




    public function store(Request $request)
    {
        $produto_request =  $request->all('designacao', 'categoria', 'variedades');
        \DB::beginTransaction();


            $produto = Produto::create(
                [
                    'designacao' => $produto_request['designacao'],
                    'categoria_produtos_id' => $produto_request['categoria']['id']
                ]);

            if(!$produto){
                \DB::rollBack();
                throw new Exception('Erro ao criar um produto', 402);
            }
            else{
                foreach ($produto_request['variedades'] as $variedade){
                    $varie = Variedade::create(
                        [
                            'designacao' => $variedade,
                            'produtos_id' => $produto->id
                        ]
                    );


                    if (!$varie){
                        \DB::rollBack();
                        throw new Exception('Erro ao criar variedades', 402);
                    }
                }
            }

        \DB::commit();
            return ['produto' => $produto];

    }


}
