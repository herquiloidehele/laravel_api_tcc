<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oferta extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'ofertas';
    protected $fillable = ['produtos_id','produtores_id','tipo_preco', 'preco','preco_unidade', 'quantidade', 'data_fim', 'estado', 'unidades_medidas_id'];


    public function revendedores(){
        return $this->belongsToMany('App\Models\Revendedor', 'reservas', 'ofertas_id', 'revendedores_id');
    }

    public function unidadeMedida(){
        return $this->belongsTo('App\Models\UnidadeMedida', 'unidades_medidas_id');
    }

    public function parcelamentos(){
        return $this->hasMany('App\Models\Parcelamento', 'ofertas_id');
    }

}
