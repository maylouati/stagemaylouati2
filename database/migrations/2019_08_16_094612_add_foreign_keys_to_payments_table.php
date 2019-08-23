<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('payments', function(Blueprint $table)
		{
			$table->foreign('bordereau_id', 'payments_bordereau_id_foreign')->references('id')->on('bordereaux')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientcredit_id', 'payments_clientcredit_id_foreign')->references('id')->on('clientcredits')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientdn_id', 'payments_clientdn_id_foreign')->references('id')->on('clientdns')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientinvoice_id', 'payments_clientinvoice_id_foreign')->references('id')->on('clientinvoices')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientorder_id', 'payments_clientorder_id_foreign')->references('id')->on('clientorders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientrn_id', 'payments_clientrn_id_foreign')->references('id')->on('clientrns')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencydoc_id', 'payments_currencydoc_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currencyerp_id', 'payments_currencyerp_id_foreign')->references('id')->on('currencies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fidpointsmov_id', 'payments_fidpointsmov_id_foreign')->references('id')->on('fidpointsmovs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('suppliercredit_id', 'payments_suppliercredit_id_foreign')->references('id')->on('suppliercredits')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierdn_id', 'payments_supplierdn_id_foreign')->references('id')->on('supplierdns')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierinvoice_id', 'payments_supplierinvoice_id_foreign')->references('id')->on('supplierinvoices')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierorder_id', 'payments_supplierorder_id_foreign')->references('id')->on('supplierorders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierrn_id', 'payments_supplierrn_id_foreign')->references('id')->on('supplierrns')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tier_id', 'payments_tier_id_foreign')->references('id')->on('tiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('payments', function(Blueprint $table)
		{
			$table->dropForeign('payments_bordereau_id_foreign');
			$table->dropForeign('payments_clientcredit_id_foreign');
			$table->dropForeign('payments_clientdn_id_foreign');
			$table->dropForeign('payments_clientinvoice_id_foreign');
			$table->dropForeign('payments_clientorder_id_foreign');
			$table->dropForeign('payments_clientrn_id_foreign');
			$table->dropForeign('payments_currencydoc_id_foreign');
			$table->dropForeign('payments_currencyerp_id_foreign');
			$table->dropForeign('payments_fidpointsmov_id_foreign');
			$table->dropForeign('payments_suppliercredit_id_foreign');
			$table->dropForeign('payments_supplierdn_id_foreign');
			$table->dropForeign('payments_supplierinvoice_id_foreign');
			$table->dropForeign('payments_supplierorder_id_foreign');
			$table->dropForeign('payments_supplierrn_id_foreign');
			$table->dropForeign('payments_tier_id_foreign');
		});
	}

}
