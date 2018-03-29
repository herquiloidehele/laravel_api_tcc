<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('designacao', 45);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('categoria_produtos_id')->nullable()->index('fk_produtos_categoria_produtos1_idx');
			$table->integer('epocas_produtos_id')->nullable()->index('fk_produtos_epocas_produtos1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produtos');
	}

}
