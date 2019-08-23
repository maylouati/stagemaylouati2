<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBordereauxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bordereaux', function(Blueprint $table)
		{
			$table->uuid('id')->primary('Bordereaux_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->text('createdfrom')->nullable();
			$table->string('createdby', 30)->nullable();
			$table->string('reference', 50)->default('');
			$table->integer('number')->default(0);
			$table->datetimetz('date')->default('0001-12-31 23:42:30+00 BC');
			$table->text('title')->default('');
			$table->decimal('amount', 19, 7)->default(0);
			$table->decimal('endorsmentrate', 19, 7)->default(0);
			$table->integer('docState')->default(0);
			$table->uuid('financer_id')->nullable()->index('Bordereaux_IX_Financer_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bordereaux');
	}

}
