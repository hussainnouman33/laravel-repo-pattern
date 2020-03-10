<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientComplaintDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient_complaint_description', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 512)->nullable();
			$table->boolean('checked')->default(0);
			$table->integer('bodyPartId')->unsigned()->index('patient_complaint_description_bodypartid_foreign');
			$table->integer('complaintId')->unsigned()->index('patient_complaint_description_complaintid_foreign');
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patient_complaint_description');
	}

}
