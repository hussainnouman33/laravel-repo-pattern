<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCasePatientSessionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_patient_session', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('key')->nullable();
			$table->integer('status_id')->index('kiosk_case_patient_session_FK_1');
			$table->integer('case_id')->unsigned()->index('kiosk_case_patient_session_FK');
			$table->integer('appointment_id')->nullable()->index('kiosk_case_patient_session_FK_2');
			$table->date('date_of_check_in')->nullable();
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();


            $table->foreign('case_id', 'kiosk_case_patient_session_FK')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('status_id', 'kiosk_case_patient_session_FK_1')->references('id')->on('kiosk_case_patient_session_statuses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('appointment_id', 'kiosk_case_patient_session_FK_2')->references('id')->on('appointment')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_patient_session');
	}

}
