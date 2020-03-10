<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalIdentifierIcd10Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medical_identifier_icd10', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('icd10_code_id')->unsigned()->nullable();

			$table->integer('medical_identifier_id')->unsigned()->nullable()->index('medical_identifier_icd10_medical_identifier_id_foreign');
            $table->foreign('medical_identifier_id')->references('id')->on('medical_identifiers')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medical_identifier_icd10');
	}

}
