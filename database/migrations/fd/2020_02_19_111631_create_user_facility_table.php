<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserFacilityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_facility', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable()->index('user_facility_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');




            $table->integer('facility_location_id')->unsigned()->nullable()->index('user_facility_facility_id_foreign');
            $table->foreign('facility_location_id')->references('id')->on('facility_locations')->onUpdate('RESTRICT')->onDelete('CASCADE');



            $table->integer('speciality_id')->unsigned()->nullable()->index('user_facility_speciality_id_foreign');
            $table->foreign('speciality_id')->references('id')->on('specialities')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('is_facility_supervisor')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('user_facility_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('user_facility_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');


            $table->boolean('is_primary')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_facility');
	}

}
