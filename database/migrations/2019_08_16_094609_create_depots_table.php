<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('depots', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Depots_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->text('createdfrom')->nullable();
			$table->string('createdby', 30)->nullable();
			$table->string('title', 30)->nullable();
			$table->string('adress', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('depots');
	}

}
