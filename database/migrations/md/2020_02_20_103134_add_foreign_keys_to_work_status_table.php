<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorkStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('work_status', function(Blueprint $table)
		{
			$table->foreign('sessionId')->references('id')->on('medical_session')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('work_status', function(Blueprint $table)
		{
			$table->dropForeign('work_status_sessionid_foreign');
		});
	}

}
