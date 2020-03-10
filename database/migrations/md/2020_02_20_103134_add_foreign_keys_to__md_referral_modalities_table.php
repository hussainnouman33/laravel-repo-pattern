<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMdReferralModalitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_md_referral_modalities', function(Blueprint $table)
		{
			$table->foreign('modalityId')->references('id')->on('modalities')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('_md_referral_modalities', function(Blueprint $table)
		{
			$table->dropForeign('_md_referral_modalities_modalityid_foreign');
			$table->dropForeign('_md_referral_modalities_referralid_foreign');
		});
	}

}
