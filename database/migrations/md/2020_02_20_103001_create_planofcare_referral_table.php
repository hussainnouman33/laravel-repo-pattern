<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanofcareReferralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planofcare_referral', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('specialty', 512)->nullable();
			$table->boolean('checked')->default(0);
			$table->string('perWeek', 100)->nullable();
			$table->string('periodName', 512)->nullable();
			$table->string('intervalName', 512)->nullable();
			$table->string('noOfWeeks', 100)->nullable();
			$table->string('improvement', 100)->nullable();
			$table->text('comment', 65535)->nullable();
			$table->string('diagnosis', 512)->nullable();
			$table->text('precautions', 65535)->nullable();
			$table->text('evaluate', 65535)->nullable();
			$table->text('specificInstructions', 65535)->nullable();
			$table->integer('planOfCareId')->unsigned()->index('planofcare_referral_planofcareid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->integer('referral_id')->unsigned()->index('planofcare_referral_referral_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planofcare_referral');
	}

}
