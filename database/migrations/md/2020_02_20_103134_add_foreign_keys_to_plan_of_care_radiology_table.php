<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareRadiologyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_radiology', function(Blueprint $table)
		{
			$table->foreign('planOfCareId')->references('id')->on('plan_of_care')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('radiologyId')->references('id')->on('radiology')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('plan_of_care_radiology', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_radiology_planofcareid_foreign');
			$table->dropForeign('plan_of_care_radiology_radiologyid_foreign');
		});
	}

}
