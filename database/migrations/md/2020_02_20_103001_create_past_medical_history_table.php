<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePastMedicalHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('past_medical_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('diseasesComment', 65535)->nullable();
			$table->text('previousInjuries', 65535)->nullable();
			$table->text('familyHistory', 65535)->nullable();
			$table->text('socialHistory', 65535)->nullable();
			$table->integer('sessionId')->unsigned()->index('past_medical_history_sessionid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->string('otherAllergies', 512)->nullable();
			$table->boolean('hasOtherAllergies')->default(0);
			$table->boolean('noMedications')->nullable();
			$table->boolean('noPreviousSurgeries')->nullable();
			$table->boolean('familyHistoryNoncontributory')->nullable();
			$table->string('medications', 1024)->nullable()->default('');
			$table->text('previousSurgeries', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('past_medical_history');
	}

}
