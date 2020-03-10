<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanOfCareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_of_care', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('orthopedic', 65535)->nullable();
			$table->text('painManagement', 65535)->nullable();
			$table->text('pmr', 65535)->nullable();
			$table->text('spineSpecialist', 65535)->nullable();
			$table->text('handSpecialist', 65535)->nullable();
			$table->text('podiatry', 65535)->nullable();
			$table->text('other', 65535)->nullable();
			$table->string('extremities', 50)->nullable();
			$table->string('andOr', 10)->nullable();
			$table->text('mriComments', 65535)->nullable();
			$table->text('otherComments', 65535)->nullable();
			$table->text('casualityComments', 65535)->nullable();
			$table->text('comment', 65535)->nullable();
			$table->string('followUpOther', 100)->nullable();
			$table->string('followUpVisit', 100)->nullable();
			$table->string('prognosis', 512)->nullable();
			$table->string('prognosisCheck', 10)->nullable();
			$table->string('temporarilyImpaired', 100)->nullable();
			$table->text('temporarilyImpairedComment', 65535)->nullable();
			$table->string('otherOn', 10)->nullable();
			$table->string('radiologyOn', 10)->nullable();
			$table->string('CTScanOn', 10)->nullable();
			$table->string('MRIOn', 10)->nullable();
			$table->string('hbotPrescription', 10)->nullable();
			$table->string('synapticTreatment', 10)->nullable();
			$table->string('rangeOfMotion', 10)->nullable();
			$table->integer('sessionId')->unsigned()->index('plan_of_care_sessionid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->string('ctComments', 512)->nullable();
			$table->string('radiologyComments', 512)->nullable();
			$table->boolean('noMedications')->nullable();
			$table->boolean('noPreviousSurgeries')->nullable();
			$table->boolean('familyHistoryNoncontributory')->nullable();
			$table->boolean('orthopedic_checked')->nullable();
			$table->boolean('painManagement_checked')->nullable();
			$table->boolean('pmr_checked')->nullable();
			$table->boolean('spineSpecialist_checked')->nullable();
			$table->boolean('handSpecialist_checked')->nullable();
			$table->boolean('podiatry_checked')->nullable();
			$table->boolean('other_checked')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plan_of_care');
	}

}
