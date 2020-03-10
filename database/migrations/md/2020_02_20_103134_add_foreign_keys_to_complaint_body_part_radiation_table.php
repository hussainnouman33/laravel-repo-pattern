<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComplaintBodyPartRadiationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('complaint_body_part_radiation', function(Blueprint $table)
		{
			$table->foreign('bodyPartId')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('complaint_body_part_radiation', function(Blueprint $table)
		{
			$table->dropForeign('complaint_body_part_radiation_bodypartid_foreign');
			$table->dropForeign('complaint_body_part_radiation_complocationid_foreign');
		});
	}

}
