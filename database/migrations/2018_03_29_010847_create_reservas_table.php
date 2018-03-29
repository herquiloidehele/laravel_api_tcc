<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('revendedores_id')->index('fk_revendedores_has_oferta_revendedores1_idx');
			$table->integer('oferta_id')->index('fk_revendedores_has_oferta_oferta1_idx');
			$table->integer('quantidade')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservas');
	}

}
