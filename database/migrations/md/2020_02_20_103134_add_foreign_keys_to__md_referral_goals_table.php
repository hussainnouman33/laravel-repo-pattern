<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMdReferralGoalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_md_referral_goals', function(Blueprint $table)
		{
			$table->foreign('goalId')->references('id')->on('goals')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('referralId')->references('id')->on('planofcare_referral')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_md_referral_goals', function(Blueprint $table)
		{
			$table->dropForeign('_md_referral_goals_goalid_foreign');
			$table->dropForeign('_md_referral_goals_referralid_foreign');
		});
	}

}
