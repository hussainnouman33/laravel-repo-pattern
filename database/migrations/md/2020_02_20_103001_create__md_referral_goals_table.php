<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdReferralGoalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_md_referral_goals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('checked')->default(0);
			$table->integer('goalId')->unsigned()->index('_md_referral_goals_goalid_foreign');
			$table->integer('referralId')->unsigned()->index('_md_referral_goals_referralid_foreign');
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
		Schema::drop('_md_referral_goals');
	}

}
