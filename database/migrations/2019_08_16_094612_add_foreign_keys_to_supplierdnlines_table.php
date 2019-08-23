<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierdnlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplierdnlines', function(Blueprint $table)
		{
			$table->foreign('item_id', 'supplierdnlines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierdn_id', 'supplierdnlines_supplierdn_id_foreign')->references('id')->on('supplierdns')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('supplierorderline_id', 'supplierdnlines_supplierorderline_id_foreign')->references('id')->on('supplierorderlines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'supplierdnlines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplierdnlines', function(Blueprint $table)
		{
			$table->dropForeign('supplierdnlines_item_id_foreign');
			$table->dropForeign('supplierdnlines_supplierdn_id_foreign');
			$table->dropForeign('supplierdnlines_supplierorderline_id_foreign');
			$table->dropForeign('supplierdnlines_unit_id_foreign');
		});
	}

}
