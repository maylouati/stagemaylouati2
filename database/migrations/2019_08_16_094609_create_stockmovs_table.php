<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockmovsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockmovs', function(Blueprint $table)
		{
			$table->uuid('id')->primary('StockMovs_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->bigInteger('seq');
			$table->integer('movType')->default(0);
			$table->datetimetz('date')->default('0001-12-31 23:42:30+00 BC');
			$table->decimal('variation', 19, 7)->default(0);
			$table->decimal('level', 19, 7)->default(0);
			$table->decimal('pmp', 21, 9)->default(0);
			$table->integer('stockMovDoc')->default(0);
			$table->text('docid')->nullable();
			$table->text('docref')->nullable();
			$table->text('lineid')->nullable();
			$table->decimal('lineqty', 19, 7)->default(0);
			$table->decimal('lineprice', 19, 7)->default(0);
			$table->text('lineitemid')->nullable();
			$table->text('lineunitid')->nullable();
			$table->text('linelotid')->nullable();
			$table->text('linedepotid')->nullable();
			$table->uuid('stock_id')->nullable()->index('StockMovs_IX_Stock_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stockmovs');
	}

}
