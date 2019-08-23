<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitconversionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unitconversions', function(Blueprint $table)
		{
			$table->uuid('id')->primary('UnitConversions_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->text('createdfrom')->nullable();
			$table->decimal('value', 19, 7)->default(0);
			$table->uuid('item_id')->nullable()->index('UnitConversions_IX_Item_id');
			$table->uuid('unit1_id')->nullable()->index('UnitConversions_IX_Unit1_id');
			$table->uuid('unit2_id')->nullable()->index('UnitConversions_IX_Unit2_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unitconversions');
	}

}
