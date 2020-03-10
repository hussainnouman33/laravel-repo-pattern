<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_cases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->integer('patient_id')->unsigned()->nullable()->index('kiosk_cases_FK');
			$table->integer('case_type_id')->unsigned()->nullable()->index('kiosk_cases_case_type_id_foreign');
			$table->integer('category_id')->unsigned()->nullable()->index('kiosk_cases_category_id_foreign');
			$table->integer('purpose_of_visit_id')->nullable();
			$table->integer('practice_id')->unsigned()->nullable();
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();

            $table->foreign('patient_id', 'kiosk_cases_FK')->references('id')->on('kiosk_patient')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('case_type_id')->references('id')->on('kiosk_case_types')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('category_id')->references('id')->on('kiosk_case_categories')->onUpdate('RESTRICT')->onDelete('CASCADE');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_cases');
	}

}
