<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseMedicalTreatmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_medical_treatment', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('key')->nullable();
			$table->dateTime('date_of_first_treatment')->nullable();
			$table->boolean('treated_on_site');
			$table->dateTime('treated_on_site_date');
			$table->boolean('treated_off_site');
			$table->enum('first_off_site_treatment_location', array('clinic_hospital_urgent_care','hospital_stay_over_ 24_hours','doctor_office','emergency_room','none'));
			$table->dateTime('date_of_admission')->nullable();
			$table->boolean('same_injury_body_part')->nullable();
			$table->boolean('is_prev_injury_work_related');
			$table->boolean('same_employer');
			$table->boolean('had_ime');
			$table->boolean('have_any_first_treatment')->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_medical_treatment_fk');
			$table->integer('hospital_id')->index('kiosk_case_medical_treatment_FK');
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->integer('deleted_at')->nullable();


            $table->foreign('hospital_id', 'kiosk_case_medical_treatment_FK')->references('id')->on('hospitals')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('case_id', 'kiosk_medical_treatment_fk')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_medical_treatment');
	}

}
