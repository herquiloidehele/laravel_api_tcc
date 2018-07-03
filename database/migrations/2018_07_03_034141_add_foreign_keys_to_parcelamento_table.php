<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParcelamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parcelamento', function(Blueprint $table)
		{
			$table->foreign('ofertas_id', 'fk_parcelamento_ofertas1')->references('id')->on('ofertas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unidades_medidas_id', 'fk_parcelamento_unidades_medidas1')->references('id')->on('unidades_medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parcelamento', function(Blueprint $table)
		{
			$table->dropForeign('fk_parcelamento_ofertas1');
			$table->dropForeign('fk_parcelamento_unidades_medidas1');
		});
	}

}
