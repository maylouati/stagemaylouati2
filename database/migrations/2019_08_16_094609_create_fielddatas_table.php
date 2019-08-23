<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFielddatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fielddatas', function(Blueprint $table)
		{
			$table->uuid('id')->primary('FieldDatas_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->uuid('createdby')->nullable();
			$table->uuid('value')->nullable();
			$table->uuid('idfiche')->nullable();
			$table->uuid('field_id')->nullable()->index('FieldDatas_IX_Field_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fielddatas');
	}

}
