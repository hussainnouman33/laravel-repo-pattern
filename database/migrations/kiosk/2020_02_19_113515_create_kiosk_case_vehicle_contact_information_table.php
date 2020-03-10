<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseVehicleContactInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_vehicle_contact_information', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vehicle_information_id')->unsigned()->index('kiosk_case_vehicle_information_fk');
			$table->integer('contact_person_id')->unsigned()->index('kiosk_case_vehicle_information_fk_1');

            $table->foreign('vehicle_information_id', 'kiosk_case_vehicle_information_fk')->references('id')->on('kiosk_case_vehicle_information')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contact_person_id', 'kiosk_case_vehicle_information_fk_1')->references('id')->on('kiosk_contact_person')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_vehicle_contact_information');
	}

}
