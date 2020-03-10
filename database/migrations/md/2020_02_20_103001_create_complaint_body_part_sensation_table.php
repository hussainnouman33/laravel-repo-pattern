<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintBodyPartSensationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complaint_body_part_sensation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('compLocationID')->unsigned()->index('complaint_body_part_sensation_complocationid_foreign');
			$table->integer('bodyPartSensationId')->unsigned()->index('complaint_body_part_sensation_bodypartsensationid_foreign');
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
		Schema::drop('complaint_body_part_sensation');
	}

}
