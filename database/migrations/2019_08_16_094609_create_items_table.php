<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Items_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->text('createdfrom')->nullable();
			$table->string('createdby', 30)->nullable();
			$table->string('reference', 50)->default('');
			$table->string('label', 100)->default('');
			$table->text('description')->nullable();
			$table->text('barcodes')->nullable();
			$table->text('color')->nullable();
			$table->boolean('image')->default(0);
			$table->boolean('nostock')->default(0);
			$table->boolean('favourite')->default(0);
			$table->boolean('deleted')->default(0);
			$table->uuid('defaultunit_id')->nullable()->index('Items_IX_DefaultUnit_id');
			$table->uuid('family_id')->nullable()->index('Items_IX_Family_id');
			$table->uuid('tax_id')->nullable()->index('Items_IX_Tax_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}
