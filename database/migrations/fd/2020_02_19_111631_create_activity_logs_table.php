<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject', 250)->nullable();
			$table->string('url', 250)->nullable();
			$table->string('method', 191)->nullable();
			$table->string('ip', 250)->nullable();
			$table->string('agent', 250)->nullable();
			$table->text('request_data')->nullable();
			$table->text('before_updated_data')->nullable();
			$table->text('response_data')->nullable();
			$table->integer('status_code')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_logs');
	}

}
