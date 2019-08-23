<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierordersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplierorders', function(Blueprint $table)
		{
			$table->foreign('currencydoc_id', 'supplierorders_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'supplierorders_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplier_id', 'supplierorders_supplier_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplierorders', function(Blueprint $table)
		{
			$table->dropForeign('supplierorders_currencydoc_id_foreign');
			$table->dropForeign('supplierorders_currencyerp_id_foreign');
			$table->dropForeign('supplierorders_supplier_id_foreign');
		});
	}

}
