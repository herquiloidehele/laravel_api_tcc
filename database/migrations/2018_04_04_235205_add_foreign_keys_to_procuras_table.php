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
			$table->foreign('produtos_unidades_medidas_id', 'fk_produtos_unidades_mendidas_has_revendedores_produtos_unida1')->references('id')->on('produtos_unidades_medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
			$table->dropForeign('fk_produtos_unidades_mendidas_has_revendedores_produtos_unida1');
			$table->dropForeign('fk_produtos_unidades_mendidas_has_revendedores_revendedores1');
		});
	}

}
