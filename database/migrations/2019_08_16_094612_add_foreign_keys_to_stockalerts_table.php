<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStockalertsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stockalerts', function(Blueprint $table)
		{
			$table->foreign('item_id', 'stockalerts_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'stockalerts_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stockalerts', function(Blueprint $table)
		{
			$table->dropForeign('stockalerts_item_id_foreign');
			$table->dropForeign('stockalerts_unit_id_foreign');
		});
	}

}
