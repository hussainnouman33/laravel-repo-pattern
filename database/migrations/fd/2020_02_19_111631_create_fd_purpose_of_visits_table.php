<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFdPurposeOfVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fd_purpose_of_visits', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 100)->nullable();
			$table->string('description')->nullable();
			$table->string('comments')->nullable();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('fd_purpose_of_visits_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('fd_purpose_of_visits_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

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
		Schema::drop('fd_purpose_of_visits');
	}

}
