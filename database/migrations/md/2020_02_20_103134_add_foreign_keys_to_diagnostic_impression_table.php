<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiagnosticImpressionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('diagnostic_impression', function(Blueprint $table)
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
		Schema::table('diagnostic_impression', function(Blueprint $table)
		{
			$table->dropForeign('diagnostic_impression_sessionid_foreign');
		});
	}

}
