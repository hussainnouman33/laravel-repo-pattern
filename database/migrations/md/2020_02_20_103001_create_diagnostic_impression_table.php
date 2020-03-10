<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosticImpressionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diagnostic_impression', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('comments', 65535)->nullable();
			$table->integer('sessionId')->unsigned()->index('diagnostic_impression_sessionid_foreign');
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
		Schema::drop('diagnostic_impression');
	}

}
