<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJourneesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('journees', function(Blueprint $table)
		{
			$table->foreign('device_id', 'journees_device_id_foreign')->references('id')->on('devices')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('z_id', 'journees_z_id_foreign')->references('id')->on('z')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('journees', function(Blueprint $table)
		{
			$table->dropForeign('journees_device_id_foreign');
			$table->dropForeign('journees_z_id_foreign');
		});
	}

}
