<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends ModelController
{
    public function __construct() {
        $this->object = new Reserva();
        $this->objectName = 'reserva';
        $this->objectNames = 'reservas';
        $this->relactionships = [];
    }
}
