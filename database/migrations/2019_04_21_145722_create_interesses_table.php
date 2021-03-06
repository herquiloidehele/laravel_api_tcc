<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInteressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interesses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('revendedores_id')->index('fk_revendedores_has_produtos_unidades_mendidas_revendedores_idx');
			$table->integer('produtos_id')->index('fk_interesses_produtos1_idx');
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
		Schema::drop('interesses');
	}

}
