<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareOtherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_other', function(Blueprint $table)
		{
			$table->foreign('otherId')->references('id')->on('dexa')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('plan_of_care_other', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_other_otherid_foreign');
			$table->dropForeign('plan_of_care_other_planofcareid_foreign');
		});
	}

}
