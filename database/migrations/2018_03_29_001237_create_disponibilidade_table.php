<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisponibilidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disponibilidade', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('procura_id')->index('fk_procura_has_produtores_procura1_idx');
			$table->integer('produtores_id')->index('fk_procura_has_produtores_produtores1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('preco')->nullable();
			$table->integer('quantidade')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('disponibilidade');
	}

}
