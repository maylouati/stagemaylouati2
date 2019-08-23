<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockalertsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockalerts', function(Blueprint $table)
		{
			$table->uuid('id')->primary('StockAlerts_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->text('createdfrom')->nullable();
			$table->decimal('qtymin', 19, 7)->default(0);
			$table->uuid('item_id')->nullable()->index('StockAlerts_IX_Item_id');
			$table->uuid('unit_id')->nullable()->index('StockAlerts_IX_Unit_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stockalerts');
	}

}
