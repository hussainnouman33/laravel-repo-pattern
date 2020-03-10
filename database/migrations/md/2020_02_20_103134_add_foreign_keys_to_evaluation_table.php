<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEvaluationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evaluation', function(Blueprint $table)
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
		Schema::table('evaluation', function(Blueprint $table)
		{
			$table->dropForeign('evaluation_sessionid_foreign');
		});
	}

}
