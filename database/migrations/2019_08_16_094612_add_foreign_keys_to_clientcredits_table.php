<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientcreditsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientcredits', function(Blueprint $table)
		{
			$table->foreign('client_id', 'clientcredits_client_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencydoc_id', 'clientcredits_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'clientcredits_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientcredits', function(Blueprint $table)
		{
			$table->dropForeign('clientcredits_client_id_foreign');
			$table->dropForeign('clientcredits_currencydoc_id_foreign');
			$table->dropForeign('clientcredits_currencyerp_id_foreign');
		});
	}

}
