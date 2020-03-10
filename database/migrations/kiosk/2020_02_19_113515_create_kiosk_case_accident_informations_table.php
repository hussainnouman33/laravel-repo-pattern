<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseAccidentInformationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_accident_informations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_case_accident_informations_FK');
            $table->foreign('case_id', 'kiosk_case_accident_informations_FK')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->string('accident_date', 45)->nullable();
			$table->string('accident_time', 45)->nullable();
			$table->enum('patient_at_time_of_accident', array('taxi_driver','limo_driver','pedestrian','passenger','bicyclist','other','none'))->nullable();
			$table->string('at_time_of_accident_other_description')->nullable();
			$table->boolean('usual_work_location')->nullable();
			$table->string('location_reason', 45)->nullable();
			$table->string('accident_location', 45)->nullable();
			$table->string('accident_happend', 45)->nullable();
			$table->string('street_no', 45)->nullable();
			$table->string('city', 45)->nullable();
			$table->string('state', 45)->nullable();
			$table->string('zip', 45)->nullable();
			$table->string('nature_of_accident', 45)->nullable();
			$table->string('activity_at_injury', 45)->nullable();
			$table->string('injury_description', 45)->nullable();
			$table->boolean('injured_at_work_location')->nullable();
			$table->string('case_established', 45)->nullable();
			$table->boolean('had_ime')->nullable();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
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
		Schema::drop('kiosk_case_accident_informations');
	}

}
