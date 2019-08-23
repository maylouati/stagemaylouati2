<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientorderlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientorderlines', function(Blueprint $table)
		{
			$table->foreign('clientorder_id', 'clientorderlines_clientorder_id_foreign')->references('id')->on('clientorders')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('clientquoteline_id', 'clientorderlines_clientquoteline_id_foreign')->references('id')->on('clientquotelines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('item_id', 'clientorderlines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'clientorderlines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientorderlines', function(Blueprint $table)
		{
			$table->dropForeign('clientorderlines_clientorder_id_foreign');
			$table->dropForeign('clientorderlines_clientquoteline_id_foreign');
			$table->dropForeign('clientorderlines_item_id_foreign');
			$table->dropForeign('clientorderlines_unit_id_foreign');
		});
	}

}
