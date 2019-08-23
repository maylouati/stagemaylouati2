<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientinvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientinvoices', function(Blueprint $table)
		{
			$table->foreign('client_id', 'clientinvoices_client_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencydoc_id', 'clientinvoices_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'clientinvoices_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientinvoices', function(Blueprint $table)
		{
			$table->dropForeign('clientinvoices_client_id_foreign');
			$table->dropForeign('clientinvoices_currencydoc_id_foreign');
			$table->dropForeign('clientinvoices_currencyerp_id_foreign');
		});
	}

}
