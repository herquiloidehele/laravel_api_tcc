<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParcelamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parcelamento', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('quantidade')->nullable();
			$table->float('preco', 10, 0)->nullable();
			$table->integer('ofertas_id')->index('fk_parcelamento_ofertas1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('unidades_medidas_id')->index('fk_parcelamento_unidades_medidas1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parcelamento');
	}

}
