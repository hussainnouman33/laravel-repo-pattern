<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFirmLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('firm_locations', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('firm_id')->unsigned()->nullable()->index('firm_locations_firm_id_foreign');
            $table->foreign('firm_id')->references('id')->on('firm')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->string('location_name', 50)->nullable();
			$table->string('street_address', 191)->nullable();
			$table->string('apartment_suite', 191)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('state', 50)->nullable();
			$table->integer('zip')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->string('phone', 15)->nullable();
			$table->string('cell', 15)->nullable();
			$table->string('ext', 15)->nullable();
			$table->string('fax', 15)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('contact_person_first_name', 50)->nullable();
			$table->string('contact_person_middle_name', 50)->nullable();
			$table->string('contact_person_last_name', 50)->nullable();
			$table->string('contact_person_phone', 15)->nullable();
			$table->string('contact_person_cell', 15)->nullable();
			$table->string('contact_person_ext', 15)->nullable();
			$table->string('contact_person_fax', 15)->nullable();
			$table->string('contact_person_email', 20)->nullable();
			$table->text('comments', 65535)->nullable();
			$table->boolean('is_main')->nullable()->default(0);
			$table->integer('place_of_service_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('firm_locations');
	}

}
