<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdReferralExcercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_md_referral_excercises', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('checked')->default(0);
			$table->integer('exerciseId')->unsigned()->index('_md_referral_excercises_exerciseid_foreign');
			$table->integer('referralId')->unsigned()->index('_md_referral_excercises_referralid_foreign');
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
		Schema::drop('_md_referral_excercises');
	}

}
