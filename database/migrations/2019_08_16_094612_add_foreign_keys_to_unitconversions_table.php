<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUnitconversionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('unitconversions', function(Blueprint $table)
		{
			$table->foreign('item_id', 'unitconversions_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit1_id', 'unitconversions_unit1_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit2_id', 'unitconversions_unit2_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('unitconversions', function(Blueprint $table)
		{
			$table->dropForeign('unitconversions_item_id_foreign');
			$table->dropForeign('unitconversions_unit1_id_foreign');
			$table->dropForeign('unitconversions_unit2_id_foreign');
		});
	}

}
