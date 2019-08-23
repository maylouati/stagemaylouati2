<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientrnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientrns', function(Blueprint $table)
		{
			$table->foreign('client_id', 'clientrns_client_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientcredit_id', 'clientrns_clientcredit_id_foreign')->references('id')->on('clientcredits')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencydoc_id', 'clientrns_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'clientrns_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientrns', function(Blueprint $table)
		{
			$table->dropForeign('clientrns_client_id_foreign');
			$table->dropForeign('clientrns_clientcredit_id_foreign');
			$table->dropForeign('clientrns_currencydoc_id_foreign');
			$table->dropForeign('clientrns_currencyerp_id_foreign');
		});
	}

}
