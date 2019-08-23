<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientordersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientorders', function(Blueprint $table)
		{
			$table->foreign('client_id', 'clientorders_client_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencydoc_id', 'clientorders_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'clientorders_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientorders', function(Blueprint $table)
		{
			$table->dropForeign('clientorders_client_id_foreign');
			$table->dropForeign('clientorders_currencydoc_id_foreign');
			$table->dropForeign('clientorders_currencyerp_id_foreign');
		});
	}

}
