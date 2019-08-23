<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSuppliercreditsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('suppliercredits', function(Blueprint $table)
		{
			$table->foreign('currencydoc_id', 'suppliercredits_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'suppliercredits_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplier_id', 'suppliercredits_supplier_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('suppliercredits', function(Blueprint $table)
		{
			$table->dropForeign('suppliercredits_currencydoc_id_foreign');
			$table->dropForeign('suppliercredits_currencyerp_id_foreign');
			$table->dropForeign('suppliercredits_supplier_id_foreign');
		});
	}

}
