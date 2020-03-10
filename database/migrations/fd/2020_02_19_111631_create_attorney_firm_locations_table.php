<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttorneyFirmLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attorney_firm_locations', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('firm_location_id')->unsigned()->nullable()->index('attorney_firm_locations_firm_location_id_foreign');
            $table->foreign('firm_location_id')->references('id')->on('firm_locations')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('attorney_id')->unsigned()->nullable()->index('attorney_firm_locations_attorney_id_foreign');
            $table->foreign('attorney_id')->references('id')->on('attorney')->onUpdate('RESTRICT')->onDelete('CASCADE');

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
		Schema::drop('attorney_firm_locations');
	}

}
