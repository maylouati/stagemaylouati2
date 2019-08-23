<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStockmovsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stockmovs', function(Blueprint $table)
		{
			$table->foreign('stock_id', 'stockmovs_stock_id_foreign')->references('id')->on('stocks')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stockmovs', function(Blueprint $table)
		{
			$table->dropForeign('stockmovs_stock_id_foreign');
		});
	}

}
