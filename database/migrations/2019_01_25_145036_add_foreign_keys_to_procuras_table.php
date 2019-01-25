<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProcurasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('procuras', function(Blueprint $table)
		{
			$table->foreign('distritos_id', 'fk_procuras_distritos1')->references('id')->on('distritos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('produtos_id', 'fk_procuras_produtos1')->references('id')->on('produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unidades_medidas_id', 'fk_procuras_unidades_medidas1')->references('id')->on('unidades_medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('revendedores_id', 'fk_produtos_unidades_mendidas_has_revendedores_revendedores1')->references('id')->on('revendedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('procuras', function(Blueprint $table)
		{
			$table->dropForeign('fk_procuras_distritos1');
			$table->dropForeign('fk_procuras_produtos1');
			$table->dropForeign('fk_procuras_unidades_medidas1');
			$table->dropForeign('fk_produtos_unidades_mendidas_has_revendedores_revendedores1');
		});
	}

}
