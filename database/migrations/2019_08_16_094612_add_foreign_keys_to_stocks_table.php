<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stocks', function(Blueprint $table)
		{
			$table->foreign('depot_id', 'stocks_depot_id_foreign')->references('id')->on('depots')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('item_id', 'stocks_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('lot_id', 'stocks_lot_id_foreign')->references('id')->on('lots')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('unit_id', 'stocks_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stocks', function(Blueprint $table)
		{
			$table->dropForeign('stocks_depot_id_foreign');
			$table->dropForeign('stocks_item_id_foreign');
			$table->dropForeign('stocks_lot_id_foreign');
			$table->dropForeign('stocks_unit_id_foreign');
		});
	}

}
