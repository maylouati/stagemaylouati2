<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBalancemovlinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('balancemovlinks', function(Blueprint $table)
		{
			$table->uuid('id')->primary('BalanceMovLinks_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->uuid('balancemovdes_id')->nullable()->index('BalanceMovLinks_IX_BalanceMovDes_id');
			$table->uuid('balancemovsrc_id')->nullable()->index('BalanceMovLinks_IX_BalanceMovSrc_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('balancemovlinks');
	}

}
