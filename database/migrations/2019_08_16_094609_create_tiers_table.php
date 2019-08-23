<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTiersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tiers', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Tiers_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->text('createdfrom')->nullable();
			$table->string('name', 100)->default('');
			$table->string('email', 50)->nullable();
			$table->string('adress')->nullable();
			$table->string('phone', 50)->nullable();
			$table->string('fax', 50)->nullable();
			$table->string('website', 50)->nullable();
			$table->datetimetz('birthday')->nullable();
			$table->string('taxidnumber', 50)->nullable();
			$table->string('traderegnumber', 50)->nullable();
			$table->string('customscode', 50)->nullable();
			$table->string('contact', 50)->nullable();
			$table->text('fidserie')->nullable();
			$table->decimal('fidpoints', 19, 7)->default(0);
			$table->decimal('credit', 19, 7)->default(0);
			$table->boolean('negatifcreditallowed')->default(0);
			$table->decimal('balance', 19, 7)->default(0);
			$table->text('note')->nullable();
			$table->boolean('deleted')->default(0);
			$table->boolean('image')->default(0);
			$table->integer('legalStatus')->default(0);
			$table->integer('tierType')->default(0);
			$table->decimal('financingrate', 19, 7)->default(0);
			$table->decimal('interestrate', 19, 7)->default(0);
			$table->uuid('clientgroup_id')->nullable()->index('Tiers_IX_ClientGroup_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tiers');
	}

}
