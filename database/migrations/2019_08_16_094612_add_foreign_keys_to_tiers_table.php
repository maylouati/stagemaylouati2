<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTiersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tiers', function(Blueprint $table)
		{
			$table->foreign('clientgroup_id', 'tiers_clientgroup_id_foreign')->references('id')->on('clientgroups')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tiers', function(Blueprint $table)
		{
			$table->dropForeign('tiers_clientgroup_id_foreign');
		});
	}

}
