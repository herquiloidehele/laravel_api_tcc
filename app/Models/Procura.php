<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Procura
 * 
 * @property int $id
 * @property int $revendedores_id
 * @property int $unidades_medidas_id
 * @property int $produtos_id
 * @property int $quantidade
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $estado
 * @property int $distritos_id
 * 
 * @property \App\Models\Distrito $distrito
 * @property \App\Models\Produto $produto
 * @property \App\Models\UnidadesMedida $unidades_medida
 * @property \App\Models\Revendedore $revendedore
 *
 * @package App\Models
 */
class Procura extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'revendedores_id' => 'int',
		'unidades_medidas_id' => 'int',
		'produtos_id' => 'int',
		'quantidade' => 'int',
		'distritos_id' => 'int'
	];

	protected $fillable = [
		'revendedores_id',
		'unidades_medidas_id',
		'produtos_id',
		'quantidade',
		'estado',
		'distritos_id'
	];


	public function distrito()
	{
		return $this->belongsTo(\App\Models\Distrito::class, 'distritos_id');
	}

	public function produto()
	{
		return $this->belongsTo(\App\Models\Produto::class, 'produtos_id');
	}

	public function unidades_medida()
	{
		return $this->belongsTo(\App\Models\UnidadesMedida::class, 'unidades_medidas_id');
	}

	public function revendedore()
	{
		return $this->belongsTo(\App\Models\Revendedore::class, 'revendedores_id');
	}
}
