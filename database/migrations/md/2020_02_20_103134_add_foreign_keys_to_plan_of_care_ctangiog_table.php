<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareCtangiogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_ctangiog', function(Blueprint $table)
		{
			$table->foreign('cTAngioId')->references('id')->on('cta_angiography')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('plan_of_care_ctangiog', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_ctangiog_ctangioid_foreign');
			$table->dropForeign('plan_of_care_ctangiog_planofcareid_foreign');
		});
	}

}
