<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseMedicalTreatmentPersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_medical_treatment_person', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('medical_treatment_id')->index('kiosk_medical_treatment_person_fk_1');
			$table->integer('contact_person_id')->unsigned()->index('kiosk_medical_treatment_person_fk');

            $table->foreign('contact_person_id', 'kiosk_medical_treatment_person_fk')->references('id')->on('kiosk_contact_person')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('medical_treatment_id', 'kiosk_medical_treatment_person_fk_1')->references('id')->on('kiosk_case_medical_treatment')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_medical_treatment_person');
	}

}
