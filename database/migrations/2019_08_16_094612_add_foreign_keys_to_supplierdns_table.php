<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierdnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplierdns', function(Blueprint $table)
		{
			$table->foreign('currencydoc_id', 'supplierdns_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'supplierdns_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplier_id', 'supplierdns_supplier_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierinvoice_id', 'supplierdns_supplierinvoice_id_foreign')->references('id')->on('supplierinvoices')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplierdns', function(Blueprint $table)
		{
			$table->dropForeign('supplierdns_currencydoc_id_foreign');
			$table->dropForeign('supplierdns_currencyerp_id_foreign');
			$table->dropForeign('supplierdns_supplier_id_foreign');
			$table->dropForeign('supplierdns_supplierinvoice_id_foreign');
		});
	}

}
