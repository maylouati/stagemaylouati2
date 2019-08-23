<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFidpointsmovsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fidpointsmovs', function(Blueprint $table)
		{
			$table->uuid('id')->primary('FidPointsMovs_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->datetimetz('date')->default('0001-12-31 23:42:30+00 BC');
			$table->decimal('variation', 19, 7)->default(0);
			$table->decimal('level', 19, 7)->default(0);
			$table->integer('fidPointsMovDoc')->default(0);
			$table->text('docid')->nullable();
			$table->text('docref')->nullable();
			$table->uuid('tier_id')->nullable()->index('FidPointsMovs_IX_Tier_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fidpointsmovs');
	}

}
