<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseEmploymentInformationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_employment_informations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->unsigned()->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_case_employment_informations_fk');
			$table->string('title', 45)->nullable();
			$table->text('activities', 65535)->nullable();
			$table->enum('type', array('full_time','part_time','seasonal','volunteer','other'))->nullable();
			$table->text('type_description', 65535)->nullable();
			$table->boolean('receive_lodging')->nullable();
			$table->text('lodging_description', 65535)->nullable();
			$table->float('gross_salary', 10, 0)->nullable();
			$table->string('often_paid', 150)->nullable();
			$table->boolean('course_of_employment')->nullable();
			$table->boolean('unemployment_benefits');
			$table->float('weekly_earning', 10, 0)->nullable();
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('no_of_hours_per_day')->nullable();
			$table->integer('no_of_days_per_week')->nullable();

            $table->foreign('case_id', 'kiosk_case_employment_informations_fk')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_employment_informations');
	}

}
