<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Revendedor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'revendoedores';
    protected $fillable = ['user_id', 'mercados_id'];


    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }

    public function mercado(){
        return $this->belongsTo('App\Models\Mercado', 'mercados_id');
    }

    public function telefones(){
        return $this->hasMany('App\Models\TelefoneRevendedor', 'revendedores_id');
    }


    public function interesses(){
        return $this->belongsToMany('App\Models\ProdutoUnidadeMedida', 'interesses', 'revededores_id', 'produtos_unidades_medidas_id');
    }

    public function procuras(){
        return $this->belongsToMany('App\Models\ProdutoUnidadeMedida', 'procuras', 'revededores_id', 'produtos_unidades_medidas_id');
    }


    public function ofertas(){
        return $this->belongsToMany('App\Models\Oferta', 'reservas', 'revendedores_id', 'ofertas_id');
    }

}
