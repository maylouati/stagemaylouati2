<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockiolinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockiolines', function(Blueprint $table)
		{
			$table->uuid('id')->primary('StockIoLines_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->integer('movType')->default(0);
			$table->decimal('quantity', 19, 7)->default(0);
			$table->decimal('price', 19, 7)->default(0);
			$table->text('lotid')->nullable();
			$table->text('lotcode')->nullable();
			$table->uuid('item_id')->nullable()->index('StockIoLines_IX_Item_id');
			$table->uuid('stockio_id')->nullable()->index('StockIoLines_IX_StockIo_id');
			$table->uuid('unit_id')->nullable()->index('StockIoLines_IX_Unit_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stockiolines');
	}

}
