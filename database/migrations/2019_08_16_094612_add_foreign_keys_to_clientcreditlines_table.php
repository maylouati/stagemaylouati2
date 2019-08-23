<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientcreditlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientcreditlines', function(Blueprint $table)
		{
			$table->foreign('clientcredit_id', 'clientcreditlines_clientcredit_id_foreign')->references('id')->on('clientcredits')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('clientinvoiceline_id', 'clientcreditlines_clientinvoiceline_id_foreign')->references('id')->on('clientinvoicelines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clientrnline_id', 'clientcreditlines_clientrnline_id_foreign')->references('id')->on('clientrnlines')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('item_id', 'clientcreditlines_item_id_foreign')->references('id')->on('items')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unit_id', 'clientcreditlines_unit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientcreditlines', function(Blueprint $table)
		{
			$table->dropForeign('clientcreditlines_clientcredit_id_foreign');
			$table->dropForeign('clientcreditlines_clientinvoiceline_id_foreign');
			$table->dropForeign('clientcreditlines_clientrnline_id_foreign');
			$table->dropForeign('clientcreditlines_item_id_foreign');
			$table->dropForeign('clientcreditlines_unit_id_foreign');
		});
	}

}
