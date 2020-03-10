<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComplaintBodyPartFeelingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('complaint_body_part_feeling', function(Blueprint $table)
		{
			$table->foreign('bodyPartFeelingId')->references('id')->on('body_part_feeling')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('complaint_body_part_feeling', function(Blueprint $table)
		{
			$table->dropForeign('complaint_body_part_feeling_bodypartfeelingid_foreign');
			$table->dropForeign('complaint_body_part_feeling_complocationid_foreign');
		});
	}

}
