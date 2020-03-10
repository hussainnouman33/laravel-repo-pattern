<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacilityBillingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facility_billings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('facility_location_id')->unsigned()->nullable()->index('facility_billings_facility_location_id_foreign');
            $table->foreign('facility_location_id')->references('id')->on('facility_locations')->onUpdate('RESTRICT')->onDelete('CASCADE');






            $table->string('provider_name', 191)->nullable();
			$table->string('city', 191)->nullable();
			$table->string('state', 191)->nullable();
			$table->string('zip', 191)->nullable();
			$table->string('phone', 191)->nullable();
			$table->string('fax', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('address', 191)->nullable();
			$table->string('ext_no', 191)->nullable();
			$table->string('cell_no', 191)->nullable();
			$table->string('floor', 191)->nullable();
			$table->string('npi', 191)->nullable();
			$table->string('tin', 191)->nullable();

			$table->integer('created_by')->unsigned()->nullable()->index('facility_billings_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

			$table->integer('updated_by')->unsigned()->nullable()->index('facility_billings_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->timestamps();
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
		Schema::drop('facility_billings');
	}

}
