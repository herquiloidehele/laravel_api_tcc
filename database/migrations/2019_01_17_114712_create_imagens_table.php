<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imagens', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('caminho', 100);
			$table->boolean('is_principal')->nullable();
			$table->integer('tamanho')->nullable();
			$table->integer('ofertas_id')->index('fk_imagens_ofertas1_idx');
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
		Schema::drop('imagens');
	}

}
