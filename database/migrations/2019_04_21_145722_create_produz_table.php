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
			$table->timestamps();
			$table->softDeletes();
			$table->integer('produtores_id')->index('fk_produz_produtores1_idx');
			$table->integer('produtos_id')->index('fk_produz_produtos1_idx');
			$table->integer('quantidade')->nullable();
			$table->integer('unidades_medidas_id')->nullable()->index('fk_produz_unidades_medidas1_idx');
			$table->text('descricao', 65535)->nullable();
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
