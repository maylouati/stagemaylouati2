<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fields', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Fields_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->text('createdfrom')->nullable();
			$table->text('title')->nullable();
			$table->text('choicelist')->nullable();
			$table->text('initial')->nullable();
			$table->boolean('required')->default(0);
			$table->boolean('deleted')->default(0);
			$table->text('fgvalue')->nullable();
			$table->text('tempvalue')->nullable();
			$table->integer('fieldDoc')->default(0);
			$table->integer('fieldType')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fields');
	}

}
