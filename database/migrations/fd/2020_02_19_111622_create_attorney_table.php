<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttorneyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attorney', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 20);
			$table->string('middle_name', 20)->nullable();
			$table->string('last_name', 20)->nullable();
			$table->string('street_address', 191)->nullable();
			$table->string('suit_floor', 191)->nullable();
			$table->string('city', 191)->nullable();
			$table->string('state', 191)->nullable();
			$table->string('zip', 191)->nullable();
			$table->string('phone_no', 15)->nullable();
			$table->string('ext', 15)->nullable();
			$table->string('cell_no', 15)->nullable();
			$table->string('fax', 15)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('comments', 512)->nullable();
			$table->timestamps();
			$table->softDeletes();

			$table->integer('created_by')->unsigned()->nullable()->index('attorney_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('attorney_updated_by_foreign');
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
		Schema::drop('attorney');
	}

}
