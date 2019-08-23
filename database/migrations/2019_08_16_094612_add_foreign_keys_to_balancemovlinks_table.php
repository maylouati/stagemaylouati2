<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBalancemovlinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('balancemovlinks', function(Blueprint $table)
		{
			$table->foreign('balancemovdes_id', 'balancemovlinks_balancemovdes_id_foreign')->references('id')->on('balancemovs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('balancemovsrc_id', 'balancemovlinks_balancemovsrc_id_foreign')->references('id')->on('balancemovs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('balancemovlinks', function(Blueprint $table)
		{
			$table->dropForeign('balancemovlinks_balancemovdes_id_foreign');
			$table->dropForeign('balancemovlinks_balancemovsrc_id_foreign');
		});
	}

}
