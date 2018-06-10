<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservasParcelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservas_parcelas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('revendedores_id')->index('fk_revendedores_has_parcelamento_revendedores1_idx');
			$table->integer('parcelamento_id')->index('fk_revendedores_has_parcelamento_parcelamento1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->boolean('is_aceite')->nullable();
			$table->string('mensagem', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservas_parcelas');
	}

}
