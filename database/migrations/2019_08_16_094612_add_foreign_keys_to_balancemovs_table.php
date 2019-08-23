<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBalancemovsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('balancemovs', function(Blueprint $table)
		{
			$table->foreign('tier_id', 'balancemovs_tier_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('balancemovs', function(Blueprint $table)
		{
			$table->dropForeign('balancemovs_tier_id_foreign');
		});
	}

}
