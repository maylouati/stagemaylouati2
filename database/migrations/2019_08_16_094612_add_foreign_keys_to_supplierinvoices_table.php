<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierinvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplierinvoices', function(Blueprint $table)
		{
			$table->foreign('currencydoc_id', 'supplierinvoices_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'supplierinvoices_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplier_id', 'supplierinvoices_supplier_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplierinvoices', function(Blueprint $table)
		{
			$table->dropForeign('supplierinvoices_currencydoc_id_foreign');
			$table->dropForeign('supplierinvoices_currencyerp_id_foreign');
			$table->dropForeign('supplierinvoices_supplier_id_foreign');
		});
	}

}
