<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagImpIcd10CodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diag_imp_icd10_codes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('icd10_code_id')->unsigned();
			$table->integer('diag_imp_id')->unsigned()->index('diag_imp_icd10_codes_diag_imp_id_foreign');
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diag_imp_icd10_codes');
	}

}
