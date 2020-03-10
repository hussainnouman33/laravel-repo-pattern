<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanOfCareMrangiogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_of_care_mrangiog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('withValue', 191)->nullable();
			$table->string('childId', 191)->nullable();
			$table->integer('childChecked');
			$table->integer('callStatReport')->nullable();
			$table->integer('sendPhysicianFilms')->nullable();
			$table->text('otherComment', 65535)->nullable();
			$table->integer('mRAngioId')->unsigned()->index('plan_of_care_mrangiog_mrangioid_foreign');
			$table->integer('planOfCareId')->unsigned()->index('plan_of_care_mrangiog_planofcareid_foreign');
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
		Schema::drop('plan_of_care_mrangiog');
	}

}
