<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacilityLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facility_locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('facility_id')->unsigned()->nullable()->index('facility_locations_facility_id_foreign');
            $table->foreign('facility_id')->references('id')->on('facilities')->onUpdate('RESTRICT')->onDelete('CASCADE');


            $table->string('name', 191)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('state', 50)->nullable();
			$table->string('zip', 50)->nullable();
			$table->string('region_id', 50)->nullable();
			$table->string('address', 250)->nullable();
			$table->string('phone', 50)->nullable();
			$table->string('fax', 50)->nullable();
			$table->string('email', 100)->nullable();
			$table->dateTime('office_hours_start')->nullable();
			$table->dateTime('office_hours_end')->nullable();
			$table->float('lat', 10, 0)->nullable();
			$table->float('long', 10, 0)->nullable();
			$table->timestamps();
			$table->softDeletes();

			$table->integer('created_by')->unsigned()->nullable()->index('facility_locations_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('facility_locations_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->string('day_list', 191)->nullable();
			$table->string('floor', 191)->nullable();
			$table->boolean('place_of_service_id')->nullable();
			$table->string('ext_no', 191)->nullable();
			$table->string('cell_no', 191)->nullable();
			$table->boolean('is_main')->default(0);
			$table->boolean('same_as_provider')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facility_locations');
	}

}
