<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComplaintBodyPartSensationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('complaint_body_part_sensation', function(Blueprint $table)
		{
			$table->foreign('bodyPartSensationId')->references('id')->on('body_part_sensation')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('compLocationID')->references('id')->on('complaints_location')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('complaint_body_part_sensation', function(Blueprint $table)
		{
			$table->dropForeign('complaint_body_part_sensation_bodypartsensationid_foreign');
			$table->dropForeign('complaint_body_part_sensation_complocationid_foreign');
		});
	}

}
