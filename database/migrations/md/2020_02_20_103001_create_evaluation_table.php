<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvaluationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('chiefComplaints', 65535)->nullable();
			$table->text('illnessHistory', 65535)->nullable();
			$table->string('alleviation', 10)->nullable();
			$table->string('painAreas', 512)->nullable();
			$table->string('headaches', 512)->nullable();
			$table->integer('sessionId')->unsigned()->index('evaluation_sessionid_foreign');
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
		Schema::drop('evaluation');
	}

}
