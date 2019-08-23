<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBordereauxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bordereaux', function(Blueprint $table)
		{
			$table->foreign('financer_id', 'bordereaux_financer_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bordereaux', function(Blueprint $table)
		{
			$table->dropForeign('bordereaux_financer_id_foreign');
		});
	}

}
