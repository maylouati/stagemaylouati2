<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSyncsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('syncs', function(Blueprint $table)
		{
			$table->foreign('device_id', 'syncs_device_id_foreign')->references('id')->on('devices')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('syncs', function(Blueprint $table)
		{
			$table->dropForeign('syncs_device_id_foreign');
		});
	}

}
