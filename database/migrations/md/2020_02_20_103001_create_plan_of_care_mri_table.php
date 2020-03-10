<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanOfCareMriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_of_care_mri', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('left')->nullable();
			$table->integer('right')->nullable();
			$table->string('withValue', 191)->nullable();
			$table->integer('callStatReport')->nullable();
			$table->integer('sendPhysicianFilms')->nullable();
			$table->text('otherComment', 65535)->nullable();
			$table->integer('mriId')->unsigned()->index('plan_of_care_mri_mriid_foreign');
			$table->integer('planOfCareId')->unsigned()->index('plan_of_care_mri_planofcareid_foreign');
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
		Schema::drop('plan_of_care_mri');
	}

}
