<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskContactPersonAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_contact_person_address', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->integer('contact_person_id')->unsigned()->nullable()->index('kiosk_contact_person_address_contact_person_id_foreign');
			$table->enum('type', array('mailing','residential'));
			$table->string('street', 191)->nullable();
			$table->string('apartment', 191)->nullable();
			$table->float('latitude', 10, 0)->nullable();
			$table->float('longitude', 10, 0)->nullable();
			$table->string('city', 191)->nullable();
			$table->string('state', 191)->nullable();
			$table->string('zip', 191)->nullable();
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
		Schema::drop('kiosk_contact_person_address');
	}

}
