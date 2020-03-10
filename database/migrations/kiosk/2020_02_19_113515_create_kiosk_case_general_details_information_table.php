<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseGeneralDetailsInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_general_details_information', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('injury_covered')->nullable();
			$table->integer('injury_covered_insurance_id')->nullable();
			$table->string('eligible_for_payments', 45)->nullable();
			$table->integer('worker_compensation_insurance_id')->nullable();
			$table->integer('amount_of_bills')->nullable();
			$table->boolean('same_injury');
			$table->boolean('more_health_treatment')->nullable();
			$table->boolean('other_expenses');
			$table->string('expense_description', 300);
			$table->integer('case_id')->unsigned()->index('kiosk_general_details_information_fk');
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->integer('deleted_at')->nullable();


            $table->foreign('case_id', 'kiosk_general_details_information_fk')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_general_details_information');
	}

}
