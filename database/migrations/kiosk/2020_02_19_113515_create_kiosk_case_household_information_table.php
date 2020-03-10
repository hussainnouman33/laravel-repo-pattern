<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseHouseholdInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_household_information', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('key')->nullable();
			$table->integer('case_id');
			$table->integer('contact_person_id')->nullable();
			$table->string('other', 45)->nullable();
			$table->integer('insurance_id')->nullable();
			$table->string('policy', 45)->nullable();
			$table->dateTime('effective_date')->nullable();
			$table->dateTime('expiry_date')->nullable();
			$table->boolean('own_motor_vehicle')->nullable();
			$table->timestamps();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
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
		Schema::drop('kiosk_case_household_information');
	}

}
