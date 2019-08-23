<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('currencies', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Currencies_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->string('code', 3)->nullable();
			$table->string('name', 100)->nullable();
			$table->text('symbol')->nullable();
			$table->smallInteger('decimals')->default(0);
			$table->boolean('enabled')->default(0);
			$table->decimal('rate', 19, 7)->default(0);
			$table->text('culturecode')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('currencies');
	}

}
