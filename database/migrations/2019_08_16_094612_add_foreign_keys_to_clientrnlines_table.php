<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientrnlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientrnlines', function(Blueprint $table)
		{
			$table->foreign('clientdnline_id', 'clientrnlines_clientdnline_id_foreign')->references('id')->on('clientdnlines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientrn_id', 'clientrnlines_clientrn_id_foreign')->references('id')->on('clientrns')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('item_id', 'clientrnlines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'clientrnlines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientrnlines', function(Blueprint $table)
		{
			$table->dropForeign('clientrnlines_clientdnline_id_foreign');
			$table->dropForeign('clientrnlines_clientrn_id_foreign');
			$table->dropForeign('clientrnlines_item_id_foreign');
			$table->dropForeign('clientrnlines_unit_id_foreign');
		});
	}

}
