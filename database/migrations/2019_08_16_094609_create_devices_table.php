<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('devices', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Devices_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 50)->nullable();
			$table->text('version')->nullable();
			$table->boolean('enabled')->default(0);
			$table->datetimetz('lastping')->default('0001-12-31 23:42:30+00 BC');
			$table->integer('deviceType')->default(0);
			$table->text('name')->nullable();
			$table->text('configlocal')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('devices');
	}
	

}
