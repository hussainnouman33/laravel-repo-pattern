<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTimingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_timings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->time('start_time')->nullable();
			$table->time('end_time')->nullable();
			$table->float('time_zone', 10, 0)->nullable()->default(0);
			$table->integer('day_id')->nullable();

			$table->integer('user_id')->unsigned()->index('user_facility_timings_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('facility_location_id')->unsigned()->index('user_facility_timings_facility_location_id_foreign');
            $table->foreign('facility_location_id', 'user_facility_timings_facility_location_id_foreign')->references('id')->on('facility_locations')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->timestamps();
			$table->softDeletes();

			$table->integer('created_by')->unsigned()->nullable()->index('user_facility_timings_created_by_foreign');
            $table->foreign('created_by', 'user_facility_timings_created_by_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('user_facility_timings_updated_by_foreign');
            $table->foreign('updated_by', 'user_facility_timings_updated_by_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
//
			$table->string('time_zone_string', 70)->nullable();
			$table->time('start_time_isb')->nullable();
			$table->time('end_time_isb')->nullable();






//            $table->foreign('created_by', 'user_facility_timings_created_by_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
//            $table->foreign('facility_location_id', 'user_facility_timings_facility_location_id_foreign')->references('id')->on('facility_locations')->onUpdate('RESTRICT')->onDelete('CASCADE');
//            $table->foreign('updated_by', 'user_facility_timings_updated_by_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
//            $table->foreign('user_id', 'user_facility_timings_user_id_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
//            $table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_timings');
	}

}
