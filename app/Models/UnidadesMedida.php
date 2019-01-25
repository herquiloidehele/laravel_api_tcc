<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UnidadesMedida
 * 
 * @property int $id
 * @property string $designacao
 * @property string $abreviatura
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $ofertas
 * @property \Illuminate\Database\Eloquent\Collection $procuras
 *
 * @package App\Models
 */
class UnidadesMedida extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'designacao',
		'abreviatura'
	];

	public function ofertas()
	{
		return $this->hasMany(\App\Models\Oferta::class, 'unidades_medidas_id');
	}

	public function procuras()
	{
		return $this->hasMany(\App\Models\Procura::class, 'unidades_medidas_id');
	}
}
