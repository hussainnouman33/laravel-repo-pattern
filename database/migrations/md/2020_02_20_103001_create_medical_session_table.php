<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalSessionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medical_session', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('caseId')->unsigned();
			$table->integer('patientId')->unsigned();
			$table->integer('doctorId')->unsigned();
			$table->integer('visitSessionId')->unsigned();
			$table->string('visitType', 200);
			$table->dateTime('visitDate');
			$table->boolean('finalize_visit');
			$table->softDeletes();
			$table->timestamps();
			$table->integer('appointment_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medical_session');
	}

}
