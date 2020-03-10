<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanOfCareOtherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_of_care_other', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('callStatReport')->nullable();
			$table->integer('sendPhysicianFilms')->nullable();
			$table->string('otherComment', 512)->nullable();
			$table->integer('otherId')->unsigned()->index('plan_of_care_other_otherid_foreign');
			$table->integer('planOfCareId')->unsigned()->index('plan_of_care_other_planofcareid_foreign');
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
		Schema::drop('plan_of_care_other');
	}

}
