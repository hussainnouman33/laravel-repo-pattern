<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintBodyPartFeelingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complaint_body_part_feeling', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('compLocationID')->unsigned()->index('complaint_body_part_feeling_complocationid_foreign');
			$table->integer('bodyPartFeelingId')->unsigned()->index('complaint_body_part_feeling_bodypartfeelingid_foreign');
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
		Schema::drop('complaint_body_part_feeling');
	}

}
