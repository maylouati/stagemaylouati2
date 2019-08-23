<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientinvoicelinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientinvoicelines', function(Blueprint $table)
		{
			$table->foreign('clientdnline_id', 'clientinvoicelines_clientdnline_id_foreign')->references('id')->on('clientdnlines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientinvoice_id', 'clientinvoicelines_clientinvoice_id_foreign')->references('id')->on('clientinvoices')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('item_id', 'clientinvoicelines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'clientinvoicelines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientinvoicelines', function(Blueprint $table)
		{
			$table->dropForeign('clientinvoicelines_clientdnline_id_foreign');
			$table->dropForeign('clientinvoicelines_clientinvoice_id_foreign');
			$table->dropForeign('clientinvoicelines_item_id_foreign');
			$table->dropForeign('clientinvoicelines_unit_id_foreign');
		});
	}

}
