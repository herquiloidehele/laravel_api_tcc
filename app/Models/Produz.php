<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 Apr 2019 15:04:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Produz
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $produtores_id
 * @property int $produtos_id
 * @property int $quandidade_media
 * @property int $unidades_medidas_id
 * @property string $descricao
 * 
 * @property \App\Models\Produtore $produtore
 * @property \App\Models\Produto $produto
 * @property \App\Models\UnidadesMedida $unidades_medida
 * @property \Illuminate\Database\Eloquent\Collection $epocas
 *
 * @package App\Models
 */
class Produz extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'produz';

	protected $casts = [
		'produtores_id' => 'int',
		'produtos_id' => 'int',
		'quandidade_media' => 'int',
		'unidades_medidas_id' => 'int'
	];

	protected $fillable = [
		'produtores_id',
		'produtos_id',
		'quandidade_media',
		'unidades_medidas_id',
		'descricao'
	];

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

	public function epocas()
	{
		return $this->hasMany(\App\Models\Epoca::class);
	}
}
