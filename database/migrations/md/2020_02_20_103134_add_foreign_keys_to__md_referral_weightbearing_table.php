<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMdReferralWeightbearingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_md_referral_weightbearing', function(Blueprint $table)
		{
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
		Schema::table('_md_referral_weightbearing', function(Blueprint $table)
		{
			$table->dropForeign('_md_referral_weightbearing_referralid_foreign');
		});
	}

}
