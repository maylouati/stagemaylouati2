<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientrnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientrns', function(Blueprint $table)
		{
			$table->uuid('id')->primary('ClientRns_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 30)->nullable();
			$table->text('createdfrom')->nullable();
			$table->string('reference', 50)->default('');
			$table->integer('number')->default(0);
			$table->datetimetz('date')->default('0001-12-31 23:42:30+00 BC');
			$table->decimal('discount', 19, 7)->default(0);
			$table->decimal('totalbd', 19, 7)->default(0);
			$table->decimal('totalbt', 19, 7)->default(0);
			$table->decimal('totalvat', 19, 7)->default(0);
			$table->decimal('totalat', 19, 7)->default(0);
			$table->decimal('totalbd_cur', 19, 7)->default(0);
			$table->decimal('totalbt_cur', 19, 7)->default(0);
			$table->decimal('totalvat_cur', 19, 7)->default(0);
			$table->decimal('totalat_cur', 19, 7)->default(0);
			$table->decimal('currencyrate', 19, 7)->default(0);
			$table->integer('docState')->default(0);
			$table->boolean('payed')->default(0);
			$table->uuid('client_id')->nullable()->index('ClientRns_IX_Client_id');
			$table->uuid('currencydoc_id')->nullable()->index('ClientRns_IX_CurrencyDoc_id');
			$table->uuid('currencyerp_id')->nullable()->index('ClientRns_IX_CurrencyErp_id');
			$table->uuid('clientcredit_id')->nullable()->index('ClientRns_IX_ClientCredit_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientrns');
	}

}
