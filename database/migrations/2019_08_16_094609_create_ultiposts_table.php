<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUltipostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ultiposts', function(Blueprint $table)
		{
			$table->uuid('id')->primary('UltiPosts_pkey');
			$table->datetimetz('createdon')->default('0001-12-31 23:42:30+00 BC');
			$table->string('createdby', 50)->nullable();
			$table->integer('type')->default(0);
			$table->text('carte')->nullable();
			$table->text('id_client')->nullable();
			$table->text('CodeTypeIdentifiant')->nullable();
			$table->text('num_identifiant')->nullable();
			$table->text('id_transaction')->nullable();
			$table->text('montant')->nullable();
			$table->text('id_commercant')->nullable();
			$table->text('num_facture')->nullable();
			$table->text('id_transactionPartenaire')->nullable();
			$table->text('date_transaction')->nullable();
			$table->text('montant_transaction')->nullable();
			$table->text('idclient_Pos')->nullable();
			$table->text('typeSolde')->nullable();
			$table->text('clientemission')->nullable();
			$table->text('clientdestination')->nullable();
			$table->text('reference_fact')->nullable();
			$table->text('organisme')->nullable();
			$table->text('organismename')->nullable();
			$table->text('cle')->nullable();
			$table->text('id_partenaire')->nullable();
			$table->text('id_pos')->nullable();
			$table->text('tag_pos')->nullable();
			$table->text('response')->nullable();
			$table->text('rp')->nullable();
			$table->text('rp_autorisation')->nullable();
			$table->text('rp_coderetour')->nullable();
			$table->text('rp_solde')->nullable();
			$table->text('rp_typecarte')->nullable();
			$table->text('rp_extensiondata')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ultiposts');
	}

}
