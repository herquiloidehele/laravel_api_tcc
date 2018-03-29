<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReservaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reserva', function(Blueprint $table)
		{
			$table->foreign('oferta_id', 'fk_revendedores_has_oferta_oferta1')->references('id')->on('oferta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('revendedores_id', 'fk_revendedores_has_oferta_revendedores1')->references('id')->on('revendedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reserva', function(Blueprint $table)
		{
			$table->dropForeign('fk_revendedores_has_oferta_oferta1');
			$table->dropForeign('fk_revendedores_has_oferta_revendedores1');
		});
	}

}
