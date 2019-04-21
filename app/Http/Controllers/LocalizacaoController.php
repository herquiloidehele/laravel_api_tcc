<?php

namespace App\Http\Controllers;



use App\Models\Distrito;
use App\Models\Provincia;

class LocalizacaoController extends Controller
{
    public function __construct() {
    }


    public function getProcincias(){
        return ['provincias' => Provincia::with(['distritos'])->get()];
    }



}
