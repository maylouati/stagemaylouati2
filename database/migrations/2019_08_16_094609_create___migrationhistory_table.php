<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMigrationhistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('__migrationhistory', function(Blueprint $table)
		{
			$table->string('MigrationId', 32)->default('')->primary('__MigrationHistory_pkey');
			$table->string('ContextKey', 30);
			$table->binary('Model')->default('\x');
			$table->string('ProductVersion', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('__migrationhistory');
	}

}
