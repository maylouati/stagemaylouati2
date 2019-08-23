<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierrnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplierrns', function(Blueprint $table)
		{
			$table->foreign('currencydoc_id', 'supplierrns_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'supplierrns_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplier_id', 'supplierrns_supplier_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('suppliercredit_id', 'supplierrns_suppliercredit_id_foreign')->references('id')->on('suppliercredits')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplierrns', function(Blueprint $table)
		{
			$table->dropForeign('supplierrns_currencydoc_id_foreign');
			$table->dropForeign('supplierrns_currencyerp_id_foreign');
			$table->dropForeign('supplierrns_supplier_id_foreign');
			$table->dropForeign('supplierrns_suppliercredit_id_foreign');
		});
	}

}
