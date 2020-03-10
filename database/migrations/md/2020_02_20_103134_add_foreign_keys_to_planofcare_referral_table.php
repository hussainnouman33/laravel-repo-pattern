<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanofcareReferralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('planofcare_referral', function(Blueprint $table)
		{
			$table->foreign('planOfCareId')->references('id')->on('plan_of_care')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('referral_id')->references('id')->on('referrals')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('planofcare_referral', function(Blueprint $table)
		{
			$table->dropForeign('planofcare_referral_planofcareid_foreign');
			$table->dropForeign('planofcare_referral_referral_id_foreign');
		});
	}

}
