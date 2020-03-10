<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseEmployersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_employers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->integer('case_id')->unsigned()->nullable()->index('kiosk_case_employers_case_id_foreign');
			$table->integer('employer_id')->unsigned()->nullable()->index('kiosk_case_employers_FK');
			$table->integer('employer_type_id')->unsigned()->nullable()->index('kiosk_case_employers_employer_type_id_foreign');
			$table->string('occupation', 191)->nullable();
			$table->date('date_hired')->nullable();
			$table->date('end_Date')->nullable();
			$table->boolean('is_time_looses')->default(0);
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();


            $table->foreign('employer_id', 'kiosk_case_employers_FK')->references('id')->on('employer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('case_id')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('employer_type_id')->references('id')->on('kiosk_case_employer_types')->onUpdate('RESTRICT')->onDelete('CASCADE');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_employers');
	}

}
