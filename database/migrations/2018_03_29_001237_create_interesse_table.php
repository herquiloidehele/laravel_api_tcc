<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInteresseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interesse', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('revendedores_id')->index('fk_revendedores_has_produtos_unidades_mendidas_revendedores_idx');
			$table->integer('produtos_unidades_mendidas_id')->index('fk_revendedores_has_produtos_unidades_mendidas_produtos_uni_idx');
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
		Schema::drop('interesse');
	}

}
