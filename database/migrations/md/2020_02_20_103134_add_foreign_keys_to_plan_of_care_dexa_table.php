<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareDexaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_dexa', function(Blueprint $table)
		{
			$table->foreign('dexaId')->references('id')->on('dexa')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('plan_of_care_dexa', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_dexa_dexaid_foreign');
			$table->dropForeign('plan_of_care_dexa_planofcareid_foreign');
		});
	}

}
