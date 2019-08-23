<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJourneelinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('journeelines', function(Blueprint $table)
		{
			$table->uuid('id')->primary('JourneeLines_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 50)->nullable();
			$table->text('authorizedBy')->nullable();
			$table->integer('action')->default(0);
			$table->integer('docType')->default(0);
			$table->text('docid')->nullable();
			$table->integer('status')->default(0);
			$table->uuid('journee_id')->index('JourneeLines_IX_Journee_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('journeelines');
	}

}
