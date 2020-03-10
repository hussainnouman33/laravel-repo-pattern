<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintBodyPartRadiationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complaint_body_part_radiation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('compLocationID')->unsigned()->index('complaint_body_part_radiation_complocationid_foreign');
			$table->integer('bodyPartId')->unsigned()->index('complaint_body_part_radiation_bodypartid_foreign');
			$table->string('location', 50)->nullable();
			$table->string('position', 50)->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('complaint_body_part_radiation');
	}

}
