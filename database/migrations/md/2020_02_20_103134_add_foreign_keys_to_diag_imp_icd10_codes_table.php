<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiagImpIcd10CodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('diag_imp_icd10_codes', function(Blueprint $table)
		{
			$table->foreign('diag_imp_id')->references('id')->on('diagnostic_impression')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('diag_imp_icd10_codes', function(Blueprint $table)
		{
			$table->dropForeign('diag_imp_icd10_codes_diag_imp_id_foreign');
		});
	}

}
