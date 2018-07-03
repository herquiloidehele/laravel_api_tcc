<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReservasParcelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reservas_parcelas', function(Blueprint $table)
		{
			$table->foreign('parcelamento_id', 'fk_revendedores_has_parcelamento_parcelamento1')->references('id')->on('parcelamento')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('revendedores_id', 'fk_revendedores_has_parcelamento_revendedores1')->references('id')->on('revendedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reservas_parcelas', function(Blueprint $table)
		{
			$table->dropForeign('fk_revendedores_has_parcelamento_parcelamento1');
			$table->dropForeign('fk_revendedores_has_parcelamento_revendedores1');
		});
	}

}
