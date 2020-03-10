<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareUltraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_ultra', function(Blueprint $table)
		{
			$table->foreign('planOfCareId')->references('id')->on('plan_of_care')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('ultrasoundId')->references('id')->on('ultrasound')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('plan_of_care_ultra', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_ultra_planofcareid_foreign');
			$table->dropForeign('plan_of_care_ultra_ultrasoundid_foreign');
		});
	}

}
