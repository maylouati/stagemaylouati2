<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientdnlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientdnlines', function(Blueprint $table)
		{
			$table->foreign('clientdn_id', 'clientdnlines_clientdn_id_foreign')->references('id')->on('clientdns')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('clientorderline_id', 'clientdnlines_clientorderline_id_foreign')->references('id')->on('clientorderlines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('item_id', 'clientdnlines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'clientdnlines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientdnlines', function(Blueprint $table)
		{
			$table->dropForeign('clientdnlines_clientdn_id_foreign');
			$table->dropForeign('clientdnlines_clientorderline_id_foreign');
			$table->dropForeign('clientdnlines_item_id_foreign');
			$table->dropForeign('clientdnlines_unit_id_foreign');
		});
	}

}
