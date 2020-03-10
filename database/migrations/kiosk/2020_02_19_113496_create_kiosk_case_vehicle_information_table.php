<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseVehicleInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_vehicle_information', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_vehicle_information_fk');
			$table->integer('insurance_id')->nullable()->index('kiosk_vehicle_information_fk_1');
			$table->integer('vehicle_no')->nullable();
			$table->string('year', 45)->nullable();
			$table->string('model', 45)->nullable();
			$table->string('make', 45)->nullable();
			$table->string('color', 45)->nullable();
			$table->integer('license_plate_number')->nullable();
			$table->string('state', 45)->nullable();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->softDeletes()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('policy_no', 100)->nullable();
			$table->dateTime('effective_date')->nullable();
			$table->dateTime('expiry_date')->nullable();

            $table->foreign('case_id', 'kiosk_vehicle_information_fk')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('insurance_id', 'kiosk_vehicle_information_fk_1')->references('id')->on('billing_insurances')->onUpdate('RESTRICT')->onDelete('RESTRICT');



        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_vehicle_information');
	}

}
