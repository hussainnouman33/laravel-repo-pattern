<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPastMedicalHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('past_medical_history', function(Blueprint $table)
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
		Schema::table('past_medical_history', function(Blueprint $table)
		{
			$table->dropForeign('past_medical_history_sessionid_foreign');
		});
	}

}
