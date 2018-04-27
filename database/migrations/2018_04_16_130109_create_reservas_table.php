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
			$table->integer('ofertas_id')->index('fk_ofertas_has_revendedores_ofertas1_idx');
			$table->integer('revendedores_id')->index('fk_ofertas_has_revendedores_revendedores1_idx');
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
