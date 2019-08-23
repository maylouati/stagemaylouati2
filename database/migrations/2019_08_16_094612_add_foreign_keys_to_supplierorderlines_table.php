<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierorderlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplierorderlines', function(Blueprint $table)
		{
			$table->foreign('item_id', 'supplierorderlines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierorder_id', 'supplierorderlines_supplierorder_id_foreign')->references('id')->on('supplierorders')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('unit_id', 'supplierorderlines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplierorderlines', function(Blueprint $table)
		{
			$table->dropForeign('supplierorderlines_item_id_foreign');
			$table->dropForeign('supplierorderlines_supplierorder_id_foreign');
			$table->dropForeign('supplierorderlines_unit_id_foreign');
		});
	}

}
