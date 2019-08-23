<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('items', function(Blueprint $table)
		{
			$table->foreign('defaultunit_id', 'items_defaultunit_id_foreign')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('family_id', 'items_family_id_foreign')->references('id')->on('families')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tax_id', 'items_tax_id_foreign')->references('id')->on('taxes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('items', function(Blueprint $table)
		{
			$table->dropForeign('items_defaultunit_id_foreign');
			$table->dropForeign('items_family_id_foreign');
			$table->dropForeign('items_tax_id_foreign');
		});
	}

}
