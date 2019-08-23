<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFielddatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fielddatas', function(Blueprint $table)
		{
			$table->foreign('field_id', 'fielddatas_field_id_foreign')->references('id')->on('fields')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fielddatas', function(Blueprint $table)
		{
			$table->dropForeign('fielddatas_field_id_foreign');
		});
	}

}
