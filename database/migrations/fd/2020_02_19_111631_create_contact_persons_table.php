<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactPersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_persons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 191)->nullable();
			$table->string('middle_name', 191)->nullable();
			$table->string('last_name', 191)->nullable();
			$table->string('street_address', 191)->nullable();
			$table->string('suit_floor', 191)->nullable();
			$table->string('phone_no', 191)->nullable();
			$table->string('cell_no', 191)->nullable();
			$table->string('extension', 191)->nullable();
			$table->string('city', 191)->nullable();
			$table->string('state', 191)->nullable();
			$table->string('zip', 191)->nullable();
			$table->string('fax', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('comments', 191)->nullable();
			$table->string('type_id', 191)->nullable()->comment('User = 1, Attorney = 2....');
			$table->integer('object_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();

			$table->integer('created_by')->unsigned()->nullable()->index('contact_persons_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('contact_persons_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contact_persons');
	}

}
