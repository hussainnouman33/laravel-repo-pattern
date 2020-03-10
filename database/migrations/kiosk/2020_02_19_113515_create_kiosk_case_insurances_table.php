<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseInsurancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_insurances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('key', 45)->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_case_insurances_FK');
			$table->integer('insurance_id')->index('kiosk_case_insurances_FK_1');
			$table->integer('insurance_location_id')->index('kiosk_case_insurances_FK_3');
			$table->integer('adjustor_id')->nullable()->index('kiosk_case_insurances_FK_2');
			$table->enum('insured', array('self','spouse','parent'))->nullable();
			$table->string('first_name', 45)->nullable();
			$table->string('middle_name', 45)->nullable();
			$table->string('last_name', 45)->nullable();
			$table->string('dob', 45)->nullable();
			$table->string('ssn', 100)->nullable();
			$table->string('claim_no', 45)->nullable();
			$table->string('policy_no', 45)->nullable();
			$table->string('wcb_no', 45)->nullable();
			$table->integer('contact_person_relation_id')->nullable();
			$table->string('member_id', 45)->nullable();
			$table->string('group_no', 45)->nullable();
			$table->enum('type', array('private_health','primary','secondary','tertiary'));


            $table->foreign('case_id', 'kiosk_case_insurances_FK')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('insurance_id', 'kiosk_case_insurances_FK_1')->references('id')->on('billing_insurances')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('adjustor_id', 'kiosk_case_insurances_FK_2')->references('id')->on('billing_adjuster_insurances')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('insurance_location_id', 'kiosk_case_insurances_FK_3')->references('id')->on('billing_insurances_locations')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_insurances');
	}

}
