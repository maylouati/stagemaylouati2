<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSyncsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('syncs', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Syncs_pkey');
			$table->bigInteger('seq')->default(0);
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->integer('syncDoc')->default(0);
			$table->integer('syncAction')->default(0);
			$table->text('docid')->nullable();
			$table->text('data')->nullable();
			$table->uuid('device_id')->nullable()->index('Syncs_IX_Device_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('syncs');
	}

}
