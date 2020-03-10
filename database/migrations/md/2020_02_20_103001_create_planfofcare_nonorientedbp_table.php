<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanfofcareNonorientedbpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planfofcare_nonorientedbp', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('checked')->default(0);
			$table->integer('bodyPartId')->unsigned()->index('planfofcare_nonorientedbp_bodypartid_foreign');
			$table->integer('planOfCareId')->unsigned()->index('planfofcare_nonorientedbp_planofcareid_foreign');
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planfofcare_nonorientedbp');
	}

}
