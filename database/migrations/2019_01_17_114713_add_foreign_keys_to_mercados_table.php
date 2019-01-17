<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMercadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mercados', function(Blueprint $table)
		{
			$table->foreign('localizacoes_id', 'fk_mercados_localizacao1')->references('id')->on('localizacoes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mercados', function(Blueprint $table)
		{
			$table->dropForeign('fk_mercados_localizacao1');
		});
	}

}
