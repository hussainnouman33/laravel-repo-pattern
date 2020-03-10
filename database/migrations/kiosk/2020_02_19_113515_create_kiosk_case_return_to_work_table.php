<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseReturnToWorkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_return_to_work', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('key')->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_return_to_work_fk');
			$table->boolean('work_stop')->nullable();
			$table->dateTime('work_stop_date')->nullable();
			$table->boolean('return_to_work')->nullable();
			$table->dateTime('return_to_work_date')->nullable();
			$table->enum('current_employment_status', array('same_employer','new_employer','self_employed'))->nullable();
			$table->enum('type_of_assignment', array('regular_duty','limited_duty'))->nullable();
			$table->boolean('illness_notice')->nullable();
			$table->dateTime('illness_notice_date')->nullable();
			$table->enum('given_notice_type', array('in_writing','verbally'))->nullable();
			$table->integer('contact_person_id')->unsigned()->nullable()->index('kiosk_case_return_to_work_FK');
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->integer('deleted_at')->nullable();

            $table->foreign('contact_person_id', 'kiosk_case_return_to_work_FK')->references('id')->on('kiosk_contact_person')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('case_id', 'kiosk_return_to_work_fk')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_return_to_work');
	}

}
