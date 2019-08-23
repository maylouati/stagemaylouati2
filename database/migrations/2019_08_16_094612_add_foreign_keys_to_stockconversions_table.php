<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStockconversionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stockconversions', function(Blueprint $table)
		{
			$table->foreign('item_id', 'stockconversions_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('unit1_id', 'stockconversions_unit1_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit2_id', 'stockconversions_unit2_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stockconversions', function(Blueprint $table)
		{
			$table->dropForeign('stockconversions_item_id_foreign');
			$table->dropForeign('stockconversions_unit1_id_foreign');
			$table->dropForeign('stockconversions_unit2_id_foreign');
		});
	}

}
