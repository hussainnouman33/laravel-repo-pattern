<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskContactPersonTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_contact_person_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->string('name', 191)->nullable();
			$table->string('slug', 45)->nullable();
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_contact_person_types');
	}

}
