<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStockiolinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stockiolines', function(Blueprint $table)
		{
			$table->foreign('item_id', 'stockiolines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('stockio_id', 'stockiolines_stockio_id_foreign')->references('id')->on('stockios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'stockiolines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stockiolines', function(Blueprint $table)
		{
			$table->dropForeign('stockiolines_item_id_foreign');
			$table->dropForeign('stockiolines_stockio_id_foreign');
			$table->dropForeign('stockiolines_unit_id_foreign');
		});
	}

}
