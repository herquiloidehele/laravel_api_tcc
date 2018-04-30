<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Procura extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'procuras';
    protected $fillable = ['produtos_id', 'revendedores_id', 'estado', 'quantidade', 'unidades_medidas_id', 'data_fim'];


    public function produtores(){
        return $this->belongsToMany('App\Models\Produtor', 'disponibilidades', 'procuras_id', 'produtores_id');
    }

    public function unidadeMedida(){
        return $this->belongsTo('App\Models\UnidadeMedida', 'unidades_medidas_id');
    }

}
