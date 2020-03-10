<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskContactPersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_contact_person', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_contact_person_FK_2');
			$table->integer('contact_person_type_id')->unsigned()->index('kiosk_contact_person_contact_person_type_id_foreign');
			$table->integer('contact_person_relation_id')->unsigned()->nullable()->index('kiosk_contact_person_contact_person_relation_id_foreign');
			$table->string('other_relation_description', 150)->nullable();
			$table->string('first_name', 191)->nullable();
			$table->string('middle_name', 191)->nullable();
			$table->string('last_name', 191)->nullable();
			$table->string('ssn', 191)->nullable();
			$table->date('dob')->nullable();
			$table->integer('age')->nullable();
			$table->enum('gender', array('male','female','indeterminate'))->nullable();
			$table->string('email', 45)->nullable();
			$table->string('fax', 45)->nullable();
			$table->string('cell_phone', 45)->nullable();
			$table->string('home_phone', 45)->nullable();
			$table->string('work_phone', 45)->nullable();
			$table->string('ext', 45)->nullable();
			$table->integer('height_in')->nullable();
			$table->integer('height_ft')->nullable();
			$table->float('weight_lbs')->nullable();
			$table->float('weight_kg')->nullable();
			$table->string('marital_status', 191)->nullable();
			$table->boolean('is_resedential_same')->nullable();
			$table->boolean('is_emergency')->nullable();
			$table->boolean('is_guarantor')->nullable();
			$table->string('workplace_name', 191)->nullable();
			$table->integer('Object_id')->nullable();
			$table->boolean('is_form_filler')->nullable();
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();


            $table->foreign('contact_person_type_id', 'kiosk_contact_person_FK')->references('id')->on('kiosk_contact_person_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contact_person_relation_id', 'kiosk_contact_person_FK_1')->references('id')->on('kiosk_contact_person_relations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('case_id', 'kiosk_contact_person_FK_2')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_contact_person');
	}

}
