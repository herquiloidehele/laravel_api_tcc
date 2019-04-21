<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 Apr 2019 15:04:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Interess
 * 
 * @property int $id
 * @property int $revendedores_id
 * @property int $produtos_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Produto $produto
 * @property \App\Models\Revendedore $revendedore
 *
 * @package App\Models
 */
class Interess extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'revendedores_id' => 'int',
		'produtos_id' => 'int'
	];

	protected $fillable = [
		'revendedores_id',
		'produtos_id'
	];

	public function produto()
	{
		return $this->belongsTo(\App\Models\Produto::class, 'produtos_id');
	}

	public function revendedore()
	{
		return $this->belongsTo(\App\Models\Revendedore::class, 'revendedores_id');
	}
}
