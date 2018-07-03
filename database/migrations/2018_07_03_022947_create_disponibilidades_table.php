<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisponibilidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disponibilidades', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('procuras_id')->index('fk_procura_has_produtores_procura1_idx');
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
		Schema::drop('disponibilidades');
	}

}
