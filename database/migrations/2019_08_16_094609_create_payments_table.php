<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Payments_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->text('createdfrom')->nullable();
			$table->string('createdby', 30)->nullable();
			$table->string('reference', 50)->default('');
			$table->integer('number')->default(0);
			$table->text('label')->nullable();
			$table->datetimetz('date')->default('0001-12-31 23:42:30+00 BC');
			$table->integer('paymentType')->default(0);
			$table->integer('paymentMode')->default(0);
			$table->datetimetz('duedate')->nullable();
			$table->decimal('amount', 19, 7)->default(0);
			$table->decimal('amount_cur', 19, 7)->default(0);
			$table->decimal('currencyrate', 19, 7)->default(0);
			$table->boolean('cashed')->default(0);
			$table->boolean('incident')->default(0);
			$table->uuid('bordereau_id')->nullable()->index('Payments_IX_Bordereau_id');
			$table->uuid('clientdn_id')->nullable()->index('Payments_IX_ClientDn_id');
			$table->uuid('clientorder_id')->nullable()->index('Payments_IX_ClientOrder_id');
			$table->uuid('clientrn_id')->nullable()->index('Payments_IX_ClientRn_id');
			$table->uuid('suppliercredit_id')->nullable()->index('Payments_IX_SupplierCredit_id');
			$table->uuid('supplierdn_id')->nullable()->index('Payments_IX_SupplierDn_id');
			$table->uuid('supplierinvoice_id')->nullable()->index('Payments_IX_SupplierInvoice_id');
			$table->uuid('supplierorder_id')->nullable()->index('Payments_IX_SupplierOrder_id');
			$table->uuid('supplierrn_id')->nullable()->index('Payments_IX_SupplierRn_id');
			$table->uuid('clientinvoice_id')->nullable()->index('Payments_IX_ClientInvoice_id');
			$table->uuid('clientcredit_id')->nullable()->index('Payments_IX_ClientCredit_id');
			$table->uuid('currencydoc_id')->nullable()->index('Payments_IX_CurrencyDoc_id');
			$table->uuid('currencyerp_id')->nullable()->index('Payments_IX_CurrencyErp_id');
			$table->uuid('fidpointsmov_id')->nullable()->index('Payments_IX_FidPointsMov_id');
			$table->uuid('tier_id')->nullable()->index('Payments_IX_Tier_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payments');
	}

}
