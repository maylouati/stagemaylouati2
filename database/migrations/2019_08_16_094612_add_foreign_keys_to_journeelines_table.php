<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJourneelinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('journeelines', function(Blueprint $table)
		{
			$table->foreign('journee_id', 'journeelines_journee_id_foreign')->references('id')->on('journees')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('journeelines', function(Blueprint $table)
		{
			$table->dropForeign('journeelines_journee_id_foreign');
		});
	}

}
