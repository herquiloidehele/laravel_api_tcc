<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mercado extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'mercados';
    protected $fillable = ['designacao',  'localizacoes_id'];


    public function revendedores(){
        return $this->hasMany('App\Models\Revendedor', 'mercados_id');
    }

    public function localizacao(){
        return $this->belongsTo('App\Models\Localizacao', 'localizacoes_id');
    }


}
