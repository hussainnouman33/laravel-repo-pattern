<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanfofcareNonorientedbpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('planfofcare_nonorientedbp', function(Blueprint $table)
		{
			$table->foreign('bodyPartId')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('planfofcare_nonorientedbp', function(Blueprint $table)
		{
			$table->dropForeign('planfofcare_nonorientedbp_bodypartid_foreign');
			$table->dropForeign('planfofcare_nonorientedbp_planofcareid_foreign');
		});
	}

}
