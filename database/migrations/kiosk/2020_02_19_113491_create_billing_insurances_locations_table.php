<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillingInsurancesLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billing_insurances_locations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('insurance_id')->index('insurance_id');
            $table->foreign('insurance_id', 'billing_insurances_locations_ibfk_1')->references('id')->on('billing_insurances')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->boolean('is_main_location')->nullable()->default(0);
			$table->string('location_name', 256)->nullable();
			$table->string('street_address', 256)->nullable();
			$table->string('apartment_suite', 256)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('state', 50)->nullable();
			$table->string('zip', 10)->nullable();
			$table->string('phone_no', 100)->nullable();
			$table->string('ext', 10)->nullable();
			$table->string('cell_number', 100)->nullable();
			$table->string('fax', 100)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('contact_person_first_name', 100)->nullable();
			$table->string('contact_person_middle_name', 100)->nullable();
			$table->string('contact_person_last_name', 100)->nullable();
			$table->string('contact_person_phone_no', 100)->nullable();
			$table->string('contact_person_ext', 10)->nullable();
			$table->string('contact_person_cell_number', 100)->nullable();
			$table->string('contact_person_fax', 100)->nullable();
			$table->string('contact_person_email', 100)->nullable();
			$table->string('comments', 256)->nullable();
			$table->timestamps();
			$table->string('location_code', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('billing_insurances_locations');
	}

}
