<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 Jan 2019 14:47:20 +0000.
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
