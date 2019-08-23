<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientgrouppricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientgroupprices', function(Blueprint $table)
		{
			$table->foreign('clientgroup_id', 'clientgroupprices_clientgroup_id_foreign')->references('id')->on('clientgroups')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('item_id', 'clientgroupprices_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('unit_id', 'clientgroupprices_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientgroupprices', function(Blueprint $table)
		{
			$table->dropForeign('clientgroupprices_clientgroup_id_foreign');
			$table->dropForeign('clientgroupprices_item_id_foreign');
			$table->dropForeign('clientgroupprices_unit_id_foreign');
		});
	}

}
