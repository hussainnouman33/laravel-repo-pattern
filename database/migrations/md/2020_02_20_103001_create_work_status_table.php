<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_status', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('outOfWorkDate')->nullable();
			$table->date('returnedToWorkDate')->nullable();
			$table->integer('sessionId')->unsigned()->index('work_status_sessionid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->string('workStatusCase', 100)->nullable();
			$table->string('limitations', 512)->nullable();
			$table->string('comments', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('work_status');
	}

}
