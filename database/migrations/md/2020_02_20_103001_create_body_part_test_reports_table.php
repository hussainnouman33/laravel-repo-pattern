<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodyPartTestReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('body_part_test_reports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('leftSign', 191)->nullable();
			$table->string('leftDegree', 191)->nullable();
			$table->string('rightSign', 191)->nullable();
			$table->string('rightDegree', 191)->nullable();
			$table->string('sign', 191)->nullable();
			$table->string('degree', 191)->nullable();
			$table->string('name', 191)->nullable();
			$table->integer('bodyPartId')->unsigned()->index('body_part_test_reports_bodypartid_foreign');
			$table->integer('movementDetailId')->unsigned()->index('body_part_test_reports_movementdetailid_foreign');
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
		Schema::drop('body_part_test_reports');
	}

}
