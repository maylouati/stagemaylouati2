<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliercreditlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suppliercreditlines', function(Blueprint $table)
		{
			$table->uuid('id')->index('SupplierCreditLines_IX_id');
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
			$table->uuid('item_id')->nullable()->index('SupplierCreditLines_IX_Item_id');
			$table->uuid('suppliercredit_id')->index('SupplierCreditLines_IX_SupplierCredit_id');
			$table->uuid('supplierinvoiceline_id')->nullable()->index('SupplierCreditLines_IX_SupplierInvoiceLine_id');
			$table->uuid('unit_id')->nullable()->index('SupplierCreditLines_IX_Unit_id');
			$table->uuid('supplierrnlines_id')->nullable()->index('SupplierCreditLines_IX_SupplierRnLines_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suppliercreditlines');
	}

}
