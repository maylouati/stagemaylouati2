<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientgrouppricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientgroupprices', function(Blueprint $table)
		{
			$table->uuid('id')->primary('ClientGroupPrices_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->text('createdfrom')->nullable();
			$table->decimal('price', 19, 7)->nullable();
			$table->decimal('fidpoints', 19, 7)->default(0);
			$table->uuid('clientgroup_id')->nullable()->index('ClientGroupPrices_IX_ClientGroup_id');
			$table->uuid('item_id')->index('ClientGroupPrices_IX_Item_id');
			$table->uuid('unit_id')->index('ClientGroupPrices_IX_Unit_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientgroupprices');
	}

}
