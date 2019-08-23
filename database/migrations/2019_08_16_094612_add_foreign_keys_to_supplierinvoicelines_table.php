<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierinvoicelinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplierinvoicelines', function(Blueprint $table)
		{
			$table->foreign('item_id', 'supplierinvoicelines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierdnline_id', 'supplierinvoicelines_supplierdnline_id_foreign')->references('id')->on('supplierdnlines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplierinvoice_id', 'supplierinvoicelines_supplierinvoice_id_foreign')->references('id')->on('supplierinvoices')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('unit_id', 'supplierinvoicelines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplierinvoicelines', function(Blueprint $table)
		{
			$table->dropForeign('supplierinvoicelines_item_id_foreign');
			$table->dropForeign('supplierinvoicelines_supplierdnline_id_foreign');
			$table->dropForeign('supplierinvoicelines_supplierinvoice_id_foreign');
			$table->dropForeign('supplierinvoicelines_unit_id_foreign');
		});
	}

}
