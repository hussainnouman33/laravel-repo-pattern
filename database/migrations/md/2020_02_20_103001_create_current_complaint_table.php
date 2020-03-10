<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrentComplaintTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('current_complaint', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('checked')->default(0);
			$table->integer('complaintId')->unsigned()->index('current_complaint_complaintid_foreign');
			$table->integer('bodyPartId')->unsigned()->index('current_complaint_bodypartid_foreign');
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
		Schema::drop('current_complaint');
	}

}
