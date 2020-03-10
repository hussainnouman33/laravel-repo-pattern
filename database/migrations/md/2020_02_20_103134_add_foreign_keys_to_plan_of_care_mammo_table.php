<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareMammoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_mammo', function(Blueprint $table)
		{
			$table->foreign('mammographyId')->references('id')->on('mammography')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('plan_of_care_mammo', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_mammo_mammographyid_foreign');
			$table->dropForeign('plan_of_care_mammo_planofcareid_foreign');
		});
	}

}
