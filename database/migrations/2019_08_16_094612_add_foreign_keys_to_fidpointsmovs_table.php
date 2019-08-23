<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFidpointsmovsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fidpointsmovs', function(Blueprint $table)
		{
			$table->foreign('tier_id', 'fidpointsmovs_tier_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fidpointsmovs', function(Blueprint $table)
		{
			$table->dropForeign('fidpointsmovs_tier_id_foreign');
		});
	}

}
