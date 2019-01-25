<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mercado
 * 
 * @property int $id
 * @property string $designacao
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $distritos_id
 * 
 * @property \App\Models\Distrito $distrito
 * @property \Illuminate\Database\Eloquent\Collection $revendedores
 *
 * @package App\Models
 */
class Mercado extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'distritos_id' => 'int'
	];

	protected $fillable = [
		'designacao',
		'distritos_id'
	];

	public function distrito()
	{
		return $this->belongsTo(\App\Models\Distrito::class, 'distritos_id');
	}

	public function revendedores()
	{
		return $this->hasMany(\App\Models\Revendedore::class, 'mercados_id');
	}
}
