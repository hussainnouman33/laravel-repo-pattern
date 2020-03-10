<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareMrangiogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_mrangiog', function(Blueprint $table)
		{
			$table->foreign('mRAngioId')->references('id')->on('mra_angiography')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('plan_of_care_mrangiog', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_mrangiog_mrangioid_foreign');
			$table->dropForeign('plan_of_care_mrangiog_planofcareid_foreign');
		});
	}

}
