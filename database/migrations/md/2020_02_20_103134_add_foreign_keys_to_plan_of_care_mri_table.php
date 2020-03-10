<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareMriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_mri', function(Blueprint $table)
		{
			$table->foreign('mriId')->references('id')->on('_md_mri')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('plan_of_care_mri', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_mri_mriid_foreign');
			$table->dropForeign('plan_of_care_mri_planofcareid_foreign');
		});
	}

}
