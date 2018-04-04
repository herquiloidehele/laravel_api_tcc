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

}
