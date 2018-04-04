<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oferta extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'ofertas';
    protected $fillable = ['produtos_unidades_medidas_id','produtores_id', 'preco', 'quantidade', 'data_fim', 'estado'];


    public function revendedores(){
        return $this->belongsToMany('App\Models\Revendedor', 'reservas', 'ofertas_id', 'revendedores_id');
    }

}
