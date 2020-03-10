<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPatientComplaintDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('patient_complaint_description', function(Blueprint $table)
		{
			$table->foreign('bodyPartId')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('complaintId')->references('id')->on('complaints')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('patient_complaint_description', function(Blueprint $table)
		{
			$table->dropForeign('patient_complaint_description_bodypartid_foreign');
			$table->dropForeign('patient_complaint_description_complaintid_foreign');
		});
	}

}
