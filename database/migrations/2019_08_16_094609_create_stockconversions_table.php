<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockconversionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockconversions', function(Blueprint $table)
		{
			$table->uuid('id')->primary('StockConversions_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->text('createdfrom')->nullable();
			$table->string('reference', 50)->default('');
			$table->integer('number')->default(0);
			$table->datetimetz('date')->default('0001-12-31 23:42:30+00 BC');
			$table->decimal('qte1', 19, 7)->default(0);
			$table->decimal('rate', 19, 7)->default(0);
			$table->decimal('qte2', 19, 7)->default(0);
			$table->text('lot1id')->nullable();
			$table->text('lot1code')->nullable();
			$table->text('lot2id')->nullable();
			$table->text('lot2code')->nullable();
			$table->uuid('item_id')->index('StockConversions_IX_Item_id');
			$table->uuid('unit1_id')->nullable()->index('StockConversions_IX_Unit1_id');
			$table->uuid('unit2_id')->nullable()->index('StockConversions_IX_Unit2_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stockconversions');
	}

}
