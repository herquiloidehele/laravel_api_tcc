<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 Apr 2019 15:04:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Epoca
 * 
 * @property int $id
 * @property string $inicio
 * @property string $fim
 * @property int $produz_id
 * 
 * @property \App\Models\Produz $produz
 *
 * @package App\Models
 */
class Epoca extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'produz_id' => 'int'
	];

	protected $fillable = [
		'inicio',
		'fim',
		'produz_id'
	];

	public function produz()
	{
		return $this->belongsTo(\App\Models\Produz::class);
	}
}
