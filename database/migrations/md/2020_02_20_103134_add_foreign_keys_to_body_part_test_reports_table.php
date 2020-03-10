<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBodyPartTestReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('body_part_test_reports', function(Blueprint $table)
		{
			$table->foreign('bodyPartId')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('movementDetailId')->references('id')->on('movement_detail')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('body_part_test_reports', function(Blueprint $table)
		{
			$table->dropForeign('body_part_test_reports_bodypartid_foreign');
			$table->dropForeign('body_part_test_reports_movementdetailid_foreign');
		});
	}

}
