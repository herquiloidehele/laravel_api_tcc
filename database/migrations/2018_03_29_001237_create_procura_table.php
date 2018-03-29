<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcuraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('procura', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('produtos_unidades_mendidas_id')->index('fk_produtos_unidades_mendidas_has_revendedores_produtos_uni_idx');
			$table->integer('revendedores_id')->index('fk_produtos_unidades_mendidas_has_revendedores_revendedores_idx');
			$table->integer('quantidade')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->dateTime('data_fim')->nullable();
			$table->boolean('estado')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('procura');
	}

}
