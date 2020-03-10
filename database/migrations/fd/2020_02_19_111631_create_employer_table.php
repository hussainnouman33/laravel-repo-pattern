<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employer_name', 50);
			$table->string('street_address', 191)->nullable();
			$table->string('apartment_suite', 191)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('state', 50)->nullable();
			$table->string('zip', 50)->nullable();
			$table->string('contactPersonFirstName', 50)->nullable();
			$table->string('contactPersonMiddleName', 50)->nullable();
			$table->string('contactPersonLastName', 50)->nullable();
			$table->string('contactPersonPhoneNo', 15)->nullable();
			$table->string('contactPersonExt', 15)->nullable();
			$table->string('contactPersonFax', 15)->nullable();
			$table->string('contactPersonEmail', 50)->nullable();
			$table->string('comments', 191)->nullable();
			$table->timestamps();
			$table->dateTime('deletedAt')->nullable();
			$table->boolean('isDeleted')->nullable();

			$table->integer('created_by')->unsigned()->nullable()->index('employer_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');


            $table->integer('updated_by')->unsigned()->nullable()->index('employer_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');


            $table->string('email')->nullable();
			$table->string('phone_no')->nullable();
			$table->string('ext')->nullable();
			$table->string('fax')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employer');
	}

}
