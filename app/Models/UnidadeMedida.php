<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnidadeMedida extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'unidades_medidas';
    protected $fillable = ['designacao', 'abreviatura'];

    public function produtos(){
        return $this->belongsToMany('App\Models\Produto', 'produtos_unidades_medidas', 'unidades_medidas_id', 'produtos_id');
    }
}
