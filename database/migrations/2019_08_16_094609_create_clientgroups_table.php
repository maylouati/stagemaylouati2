<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientgroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientgroups', function(Blueprint $table)
		{
			$table->uuid('id')->primary('ClientGroups_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->text('createdfrom')->nullable();
			$table->string('createdby', 30)->nullable();
			$table->string('title', 50)->default('');
			$table->string('description')->nullable();
			$table->decimal('discount', 19, 7)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientgroups');
	}

}
