<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplierinvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supplierinvoices', function(Blueprint $table)
		{
			$table->uuid('id')->primary('SupplierInvoices_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->text('createdfrom')->nullable();
			$table->string('reference', 50)->default('');
			$table->integer('number')->default(0);
			$table->datetimetz('date')->default('0001-12-31 23:42:30+00 BC');
			$table->datetimetz('duedate')->default('0001-12-31 23:42:30+00 BC');
			$table->decimal('discount', 19, 7)->default(0);
			$table->decimal('totalbd', 19, 7)->default(0);
			$table->decimal('totalbt', 19, 7)->default(0);
			$table->decimal('totalvat', 19, 7)->default(0);
			$table->decimal('stamp', 19, 7)->default(0);
			$table->decimal('totalat', 19, 7)->default(0);
			$table->decimal('totalbd_cur', 19, 7)->default(0);
			$table->decimal('totalbt_cur', 19, 7)->default(0);
			$table->decimal('totalvat_cur', 19, 7)->default(0);
			$table->decimal('stamp_cur', 19, 7)->default(0);
			$table->decimal('totalat_cur', 19, 7)->default(0);
			$table->decimal('currencyrate', 19, 7)->default(0);
			$table->integer('docState')->default(0);
			$table->boolean('payed')->default(0);
			$table->boolean('exported')->default(0);
			$table->uuid('currencydoc_id')->nullable()->index('SupplierInvoices_IX_CurrencyDoc_id');
			$table->uuid('currencyerp_id')->nullable()->index('SupplierInvoices_IX_CurrencyErp_id');
			$table->uuid('supplier_id')->nullable()->index('SupplierInvoices_IX_Supplier_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supplierinvoices');
	}

}
