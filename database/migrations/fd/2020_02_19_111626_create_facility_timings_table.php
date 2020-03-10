<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacilityTimingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facility_timings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->time('start_time')->nullable();
			$table->time('end_time')->nullable();
			$table->integer('day_id')->nullable();

			$table->integer('facility_location_id')->unsigned()->index('facility_timings_facility_location_id_foreign');
            $table->foreign('facility_location_id')->references('id')->on('facility_locations')->onUpdate('RESTRICT')->onDelete('CASCADE');





            $table->timestamps();
			$table->softDeletes();

			$table->integer('created_by')->unsigned()->nullable()->index('facility_timings_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('facility_timings_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->float('time_zone', 10, 0)->nullable()->default(0);
			$table->string('time_zone_string', 70)->nullable();
			$table->time('start_time_isb')->nullable();
			$table->time('end_time_isb')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facility_timings');
	}

}
