<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplierrnlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supplierrnlines', function(Blueprint $table)
		{
			$table->uuid('id')->primary('SupplierRnLines_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->decimal('quantity', 19, 7)->default(0);
			$table->decimal('discount', 19, 7)->default(0);
			$table->decimal('taxrate', 19, 7)->default(0);
			$table->decimal('price', 19, 7)->default(0);
			$table->decimal('priceot', 19, 7)->default(0);
			$table->decimal('priced1', 19, 7)->default(0);
			$table->decimal('priced2', 19, 7)->default(0);
			$table->decimal('amountvat', 19, 7)->default(0);
			$table->decimal('priceat', 19, 7)->default(0);
			$table->decimal('price_cur', 19, 7)->default(0);
			$table->decimal('priceot_cur', 19, 7)->default(0);
			$table->decimal('priced1_cur', 19, 7)->default(0);
			$table->decimal('priced2_cur', 19, 7)->default(0);
			$table->decimal('amountvat_cur', 19, 7)->default(0);
			$table->decimal('priceat_cur', 19, 7)->default(0);
			$table->text('lotid')->nullable();
			$table->text('lotcode')->nullable();
			$table->uuid('item_id')->nullable()->index('SupplierRnLines_IX_Item_id');
			$table->uuid('supplierdnline_id')->nullable()->index('SupplierRnLines_IX_SupplierDnLine_id');
			$table->uuid('supplierrn_id')->index('SupplierRnLines_IX_SupplierRn_id');
			$table->uuid('unit_id')->nullable()->index('SupplierRnLines_IX_Unit_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supplierrnlines');
	}

}
