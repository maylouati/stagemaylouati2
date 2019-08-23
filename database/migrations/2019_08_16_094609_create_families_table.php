<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFamiliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('families', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Families_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->text('createdfrom')->nullable();
			$table->string('createdby', 30)->nullable();
			$table->text('reference')->default('');
			$table->text('title')->default('');
			$table->text('description')->nullable();
			$table->text('parentid')->nullable();
			$table->text('fullpath')->nullable();
			$table->text('color')->nullable();
			$table->boolean('deleted')->default(0);
			$table->boolean('haschilds')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('families');
	}

}
