<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComplaintPainExerbationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('complaint_pain_exerbation', function(Blueprint $table)
		{
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
		Schema::table('complaint_pain_exerbation', function(Blueprint $table)
		{
			$table->dropForeign('complaint_pain_exerbation_complaintid_foreign');
		});
	}

}
