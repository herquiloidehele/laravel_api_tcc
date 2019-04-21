<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 Apr 2019 15:04:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Provincia
 * 
 * @property int $id
 * @property string $designacao
 * 
 * @property \Illuminate\Database\Eloquent\Collection $distritos
 *
 * @package App\Models
 */
class Provincia extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'designacao'
	];

	public function distritos()
	{
		return $this->hasMany(\App\Models\Distrito::class, 'provincias_id');
	}
}
