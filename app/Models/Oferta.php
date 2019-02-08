<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Carbon\Carbon;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Oferta
 * 
 * @property int $id
 * @property string $designacao
 * @property string $descricao
 * @property float $preco
 * @property int $quantidade
 * @property string $estado
 * @property int $produtos_id
 * @property int $unidades_medidas_id
 * @property int $produtores_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $negociavel
 * @property int $visualizacoes
 * @property int $distritos_id
 * 
 * @property \App\Models\Distrito $distrito
 * @property \App\Models\Produtore $produtore
 * @property \App\Models\Produto $produto
 * @property \App\Models\UnidadesMedida $unidades_medida
 * @property \Illuminate\Database\Eloquent\Collection $imagens
 *
 * @package App\Models
 */
class Oferta extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'preco' => 'float',
		'quantidade' => 'int',
		'produtos_id' => 'int',
		'unidades_medidas_id' => 'int',
		'produtores_id' => 'int',
		'visualizacoes' => 'int',
		'distritos_id' => 'int'
	];

	protected $fillable = [
		'designacao',
		'descricao',
		'preco',
		'quantidade',
		'estado',
		'produtos_id',
		'unidades_medidas_id',
		'produtores_id',
		'negociavel',
		'visualizacoes',
		'distritos_id'
	];

	public function distrito()
	{
		return $this->belongsTo(\App\Models\Distrito::class, 'distritos_id');
	}

	public function produtore()
	{
		return $this->belongsTo(\App\Models\Produtore::class, 'produtores_id');
	}

	public function produto()
	{
		return $this->belongsTo(\App\Models\Produto::class, 'produtos_id');
	}

	public function unidades_medida()
	{
		return $this->belongsTo(\App\Models\UnidadesMedida::class, 'unidades_medidas_id');
	}

	public function imagens()
	{
		return $this->hasMany(\App\Models\Imagen::class, 'ofertas_id');
	}


	public function getcreatedAtAttribute($value){
	    return Carbon::parse($value)->diffForHumans();
    }


}
