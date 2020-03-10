<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhysicalExaminationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('physical_examination', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('painLevel', 10)->nullable();
			$table->string('wellDeveloped', 10)->nullable();
			$table->string('wellNourished', 10)->nullable();
			$table->string('gait', 10)->nullable();
			$table->text('gaitComment', 65535)->nullable();
			$table->boolean('neurologic')->nullable();
			$table->text('neurologicComment', 65535)->nullable();
			$table->integer('sessionId')->unsigned()->index('physical_examination_sessionid_foreign');
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
		Schema::drop('physical_examination');
	}

}
