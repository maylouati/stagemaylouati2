<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientdnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientdns', function(Blueprint $table)
		{
			$table->foreign('client_id', 'clientdns_client_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencydoc_id', 'clientdns_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'clientdns_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientdns', function(Blueprint $table)
		{
			$table->dropForeign('clientdns_client_id_foreign');
			$table->dropForeign('clientdns_currencydoc_id_foreign');
			$table->dropForeign('clientdns_currencyerp_id_foreign');
		});
	}

}
