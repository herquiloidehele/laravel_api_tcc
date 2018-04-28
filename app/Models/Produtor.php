<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'produtores';
    protected $fillable = ['users_id', 'localizacoes_id'];
    protected $with = ['user'];

    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }

    public function telefones(){
        return $this->hasMany('App\Models\TelefoneProdutor', 'produtores_id');
    }

    public function localizacao(){
        return $this->belongsTo('App\Models\Localizacao','localizacoes_id');
    }

    public function produtosQueProduz(){
        return $this->belongsToMany('App\Models\ProdutoUnidadeMedida', 'produz', 'produtores_id', 'produtos_unidades_medidas_id')
            ->withPivot('quantidade_media');
    }

    public function ofertas(){
        return $this->belongsToMany('App\Models\ProdutoUnidadeMedida', 'ofertas',  'produtores_id','produtos_unidades_medidas_id');
    }


    public function procuras(){
        return $this->belongsToMany('App\Models\Procura', 'disponibilidades', 'produtores_id', 'procuras_id');
    }

}
