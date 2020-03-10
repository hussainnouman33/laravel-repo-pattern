<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMdReferralExcercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_md_referral_excercises', function(Blueprint $table)
		{
			$table->foreign('exerciseId')->references('id')->on('exercises')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('_md_referral_excercises', function(Blueprint $table)
		{
			$table->dropForeign('_md_referral_excercises_exerciseid_foreign');
			$table->dropForeign('_md_referral_excercises_referralid_foreign');
		});
	}

}
