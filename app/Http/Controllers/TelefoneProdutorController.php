<?php

namespace App\Http\Controllers;

use App\Models\TelefoneProdutor;
use Illuminate\Http\Request;

class TelefoneProdutorController extends ModelController
{
    public function __construct() {
        $this->object = new TelefoneProdutor();
        $this->objectName = 'telefone_produtor';
        $this->objectNames = 'telefones_produtores';
        $this->relactionships = ['produtor'];
    }
}
