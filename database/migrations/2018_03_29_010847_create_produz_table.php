<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduzTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produz', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('produtores_id')->index('fk_produtores_has_produtos_unidades_mendidas_produtores1_idx');
			$table->integer('produtos_unidades_mendidas_id')->index('fk_produtores_has_produtos_unidades_mendidas_produtos_unida_idx');
			$table->integer('quantidade_media')->nullable();
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
		Schema::drop('produz');
	}

}
