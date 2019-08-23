<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierrnlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplierrnlines', function(Blueprint $table)
		{
			$table->foreign('item_id', 'supplierrnlines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierdnline_id', 'supplierrnlines_supplierdnline_id_foreign')->references('id')->on('supplierdnlines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierrn_id', 'supplierrnlines_supplierrn_id_foreign')->references('id')->on('supplierrns')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('unit_id', 'supplierrnlines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplierrnlines', function(Blueprint $table)
		{
			$table->dropForeign('supplierrnlines_item_id_foreign');
			$table->dropForeign('supplierrnlines_supplierdnline_id_foreign');
			$table->dropForeign('supplierrnlines_supplierrn_id_foreign');
			$table->dropForeign('supplierrnlines_unit_id_foreign');
		});
	}

}
