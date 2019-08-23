<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stocks', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Stocks_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->decimal('quantity', 19, 7)->default(0);
			$table->decimal('pmp', 21, 9)->default(0);
			$table->uuid('depot_id')->index('Stocks_IX_Depot_id');
			$table->uuid('item_id')->index('Stocks_IX_Item_id');
			$table->uuid('lot_id')->index('Stocks_IX_Lot_id');
			$table->uuid('unit_id')->index('Stocks_IX_Unit_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stocks');
	}

}
