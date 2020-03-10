<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintPainExerbationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complaint_pain_exerbation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('comment', 65535)->nullable();
			$table->integer('complaintId')->unsigned()->index('complaint_pain_exerbation_complaintid_foreign');
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
		Schema::drop('complaint_pain_exerbation');
	}

}
