<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSuppliercreditlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('suppliercreditlines', function(Blueprint $table)
		{
			$table->foreign('item_id', 'suppliercreditlines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('suppliercredit_id', 'suppliercreditlines_suppliercredit_id_foreign')->references('id')->on('suppliercredits')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('supplierinvoiceline_id', 'suppliercreditlines_supplierinvoiceline_id_foreign')->references('id')->on('supplierinvoicelines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierrnlines_id', 'suppliercreditlines_supplierrnlines_id_foreign')->references('id')->on('supplierrnlines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'suppliercreditlines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('suppliercreditlines', function(Blueprint $table)
		{
			$table->dropForeign('suppliercreditlines_item_id_foreign');
			$table->dropForeign('suppliercreditlines_suppliercredit_id_foreign');
			$table->dropForeign('suppliercreditlines_supplierinvoiceline_id_foreign');
			$table->dropForeign('suppliercreditlines_supplierrnlines_id_foreign');
			$table->dropForeign('suppliercreditlines_unit_id_foreign');
		});
	}

}
