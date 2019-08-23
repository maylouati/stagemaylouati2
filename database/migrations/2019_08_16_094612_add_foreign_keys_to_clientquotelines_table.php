<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientquotelinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientquotelines', function(Blueprint $table)
		{
			$table->foreign('clientquote_id', 'clientquotelines_clientquote_id_foreign')->references('id')->on('clientquotes')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('item_id', 'clientquotelines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'clientquotelines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientquotelines', function(Blueprint $table)
		{
			$table->dropForeign('clientquotelines_clientquote_id_foreign');
			$table->dropForeign('clientquotelines_item_id_foreign');
			$table->dropForeign('clientquotelines_unit_id_foreign');
		});
	}

}
