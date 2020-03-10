<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareMultidectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_multidect', function(Blueprint $table)
		{
			$table->foreign('multiDetectId')->references('id')->on('multidetector')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('planOfCareId')->references('id')->on('plan_of_care')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('plan_of_care_multidect', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_multidect_multidetectid_foreign');
			$table->dropForeign('plan_of_care_multidect_planofcareid_foreign');
		});
	}

}
