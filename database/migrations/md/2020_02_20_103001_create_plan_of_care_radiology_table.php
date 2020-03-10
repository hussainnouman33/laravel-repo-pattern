<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanOfCareRadiologyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_of_care_radiology', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('left')->nullable();
			$table->integer('right')->nullable();
			$table->text('otherComment', 65535)->nullable();
			$table->string('childId', 191)->nullable();
			$table->integer('childChecked');
			$table->integer('callStatReport')->nullable();
			$table->integer('sendPhysicianFilms')->nullable();
			$table->integer('radiologyId')->unsigned()->index('plan_of_care_radiology_radiologyid_foreign');
			$table->integer('planOfCareId')->unsigned()->index('plan_of_care_radiology_planofcareid_foreign');
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
		Schema::drop('plan_of_care_radiology');
	}

}
