<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutosUnidadesMedidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos_unidades_medidas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('produtos_id')->index('fk_produtos_has_unidades_mendidas_produtos1_idx');
			$table->integer('unidades_mendidas_id')->index('fk_produtos_has_unidades_mendidas_unidades_mendidas1_idx');
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
		Schema::drop('produtos_unidades_medidas');
	}

}
