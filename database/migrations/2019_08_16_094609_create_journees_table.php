<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJourneesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('journees', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Journees_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->text('createdfrom')->nullable();
			$table->string('createdby', 50)->nullable();
			$table->datetimetz('startjournee')->default('0001-12-31 23:42:30+00 BC');
			$table->datetimetz('endjournee')->default('0001-12-31 23:42:30+00 BC');
			$table->integer('status')->default(0);
			$table->decimal('cajournee', 19, 7)->default(0);
			$table->decimal('retourjournee', 19, 7)->default(0);
			$table->decimal('cashflow', 19, 7)->default(0);
			$table->text('authorizeby')->nullable();
			$table->uuid('device_id')->nullable()->index('Journees_IX_Device_id');
			$table->uuid('z_id')->nullable()->index('Journees_IX_Z_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('journees');
	}

}
