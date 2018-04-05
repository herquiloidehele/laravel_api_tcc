<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProduzTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produz', function(Blueprint $table)
		{
			$table->foreign('produtores_id', 'fk_produtores_has_produtos_unidades_mendidas_produtores1')->references('id')->on('produtores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('produtos_unidades_medidas_id', 'fk_produtores_has_produtos_unidades_mendidas_produtos_unidade1')->references('id')->on('produtos_unidades_medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produz', function(Blueprint $table)
		{
			$table->dropForeign('fk_produtores_has_produtos_unidades_mendidas_produtores1');
			$table->dropForeign('fk_produtores_has_produtos_unidades_mendidas_produtos_unidade1');
		});
	}

}
