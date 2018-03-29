<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdutosUnidadesMedidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produtos_unidades_medidas', function(Blueprint $table)
		{
			$table->foreign('produtos_id', 'fk_produtos_has_unidades_mendidas_produtos1')->references('id')->on('produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unidades_mendidas_id', 'fk_produtos_has_unidades_mendidas_unidades_mendidas1')->references('id')->on('unidades_medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produtos_unidades_medidas', function(Blueprint $table)
		{
			$table->dropForeign('fk_produtos_has_unidades_mendidas_produtos1');
			$table->dropForeign('fk_produtos_has_unidades_mendidas_unidades_mendidas1');
		});
	}

}
