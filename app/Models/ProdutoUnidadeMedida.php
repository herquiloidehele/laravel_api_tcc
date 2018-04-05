<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdutoUnidadeMedida extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'produtos_unidades_medidas';
    protected $fillable = ['produtos_id', 'unidades_medidadas_id'];


    public function produzidosPor(){
        return $this->belongsToMany('App\Models\Produtor', 'produz', 'produtos_unidades_medidas_id', 'produtores_id');
    }

    public function oferta(){
        return $this->belongsToMany('App\Models\Produtor', 'oferta', 'produtos_unidades_medidas_id', 'produtores_id');
    }


    public function interesses(){
        return $this->belongsToMany('App\Models\Revendedor', 'interesses', 'produtos_unidades_medidas_id', 'revededores_id');
    }

    public function procura(){
        return $this->belongsToMany('App\Models\Revendedor', 'procuras', 'produtos_unidades_medidas_id', 'revededores_id');
    }

}
