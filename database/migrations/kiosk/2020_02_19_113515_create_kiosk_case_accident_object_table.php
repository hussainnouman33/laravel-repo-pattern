<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseAccidentObjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_accident_object', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->unsigned()->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_case_accident_object_fk');
            $table->foreign('case_id', 'kiosk_case_accident_object_fk')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->boolean('object_involved')->nullable();
			$table->string('object_involved_description', 45)->nullable();
			$table->boolean('vehicle_involved')->nullable();
			$table->enum('vehicle_belongs_to', array('patient','employer','other'))->nullable();
			$table->enum('driver_was', array('taxi','limo','none'))->nullable();
			$table->boolean('accident_reported')->nullable();
			$table->dateTime('reporting_date')->nullable();
			$table->string('precinct', 45)->nullable();
			$table->string('state', 45)->nullable();
			$table->string('city', 45)->nullable();
			$table->string('county', 45)->nullable();
			$table->enum('was_this', array('your_vehicle','employer','other'))->nullable();
			$table->string('was_this_description', 45)->nullable();
			$table->enum('vehicle_was', array('bus','truck','auto_mobile','motor_cycle'))->nullable();
			$table->integer('no_of_vehicle_involved')->nullable();
			$table->integer('vehicle_patient_were_in')->nullable();
			$table->enum('was_this_car', array('uninsured','stolen','denial_of_coverage','unidentified','disclaimer_of_coverage','none'))->nullable();
			$table->boolean('also_owner_of_vehicle')->nullable();
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
		Schema::drop('kiosk_case_accident_object');
	}

}
