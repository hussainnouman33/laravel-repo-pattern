<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointment', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('startDateTime');
			$table->string('createdAt', 512);
			$table->dateTime('modifiedAt')->nullable();
			$table->boolean('confirmationStatus')->nullable();
			$table->string('comments', 512)->nullable();
			$table->dateTime('evaluationStart')->nullable();
			$table->integer('appointmentTypeId')->nullable();
			$table->string('appointmentTitle', 512)->nullable();
			$table->integer('caseId')->nullable();
			$table->integer('timeSlot');
			$table->integer('docAssignId')->nullable();
			$table->integer('specAssignId')->nullable();
			$table->integer('recId')->nullable();
			$table->integer('roomId')->nullable();
			$table->integer('priorityId')->nullable();
			$table->integer('chartNo')->nullable();
			$table->integer('modifiedBy')->nullable();
			$table->integer('createdBy')->nullable();
			$table->string('appointmentStatus', 512)->nullable();
			$table->string('caseType', 512)->nullable();
			$table->index(['startDateTime','docAssignId'], 'TIME_INDEX');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('appointment');
	}

}
