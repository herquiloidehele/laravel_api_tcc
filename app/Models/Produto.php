<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'produtos';
    protected $fillable = ['designacao', 'categoria_produtos_id' ];


    public function categoria(){
        return $this->belongsTo('App\Models\CategoriaProduto', 'categoria_produtos_id');
    }

    public function variedades(){
        return $this->hasMany('App\Models\Variedade', 'produtos_id');
    }


    public function epocas(){
        return $this->hasMany('App\Models\Epoca', 'produtos_id');
    }

    public function unidadesMedidas(){
        return $this->belongsToMany('App\Models\UnidadeMedida', 'produtos_unidades_medidas', 'produtos_id', 'unidades_medidas_id');
    }


    public function produzidosPor(){
        return $this->belongsToMany('App\Models\Produtor', 'produz', 'produtos_id', 'produtores_id')->withPivot('created_at');
    }

    public function oferta(){
        return $this->belongsToMany('App\Models\Produtor', 'oferta', 'produtos_id', 'produtores_id')->withPivot('create_at');
    }


    public function interesses(){
        return $this->belongsToMany('App\Models\Revendedor', 'interesses', 'produtos_id', 'revendedores_id')->withPivot('created_at');
    }

    public function procura(){
        return $this->belongsToMany('App\Models\Revendedor', 'procuras', 'produtos_id', 'revendedores_id')->withPivot( 'unidades_medidas_id', 'created_at');
    }





}
