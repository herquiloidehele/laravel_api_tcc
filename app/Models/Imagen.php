<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Imagen
 * 
 * @property int $id
 * @property string $caminho
 * @property int $is_principal
 * @property int $tamanho
 * @property int $ofertas_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Oferta $oferta
 *
 * @package App\Models
 */
class Imagen extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'is_principal' => 'int',
		'tamanho' => 'int',
		'ofertas_id' => 'int'
	];

	protected $fillable = [
		'caminho',
		'is_principal',
		'tamanho',
		'ofertas_id'
	];

	public function oferta()
	{
		return $this->belongsTo(\App\Models\Oferta::class, 'ofertas_id');
	}
}
