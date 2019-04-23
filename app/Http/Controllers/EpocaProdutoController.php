<?php

namespace App\Http\Controllers;

use App\Models\Epoca;
use Illuminate\Http\Request;

class EpocaProdutoController extends ModelController
{
    public function __construct() {
        $this->object = new Epoca();
        $this->objectName = 'epoca';
        $this->objectNames = 'epocas';
        $this->relactionships = [];
    }


    public function store(Request $request)
    {
        $epocas = collect();
        foreach ($request->get('epocas') as $epoca){
            $epocas->push(Epoca::create([
                'inicio' => $epoca['inicio'],
                'fim' => $epoca['fim'],
                'produz_id' => $request->get('produz_id')
            ]));
        }

        return ['epocas' => Epoca::where('produz_id', '=', $request->get('produz_id'))->get()];

    }


}
