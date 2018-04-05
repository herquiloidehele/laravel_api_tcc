<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReservasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reservas', function(Blueprint $table)
		{
			$table->foreign('ofertas_id', 'fk_revendedores_has_oferta_oferta1')->references('id')->on('ofertas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
		Schema::table('reservas', function(Blueprint $table)
		{
			$table->dropForeign('fk_revendedores_has_oferta_oferta1');
			$table->dropForeign('fk_revendedores_has_oferta_revendedores1');
		});
	}

}
