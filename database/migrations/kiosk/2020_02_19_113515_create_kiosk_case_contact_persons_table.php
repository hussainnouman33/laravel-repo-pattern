<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseContactPersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_contact_persons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('case_id')->unsigned()->nullable()->index('kiosk_case_contact_persons_FK');
			$table->integer('contact_person_id')->unsigned()->nullable()->index('kiosk_case_contact_persons_contact_person_id_FK');
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->string('deleted_at', 45)->nullable();

            $table->foreign('case_id', 'kiosk_case_contact_persons_FK')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contact_person_id', 'kiosk_case_contact_persons_contact_person_id_FK')->references('id')->on('kiosk_contact_person')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_contact_persons');
	}

}
