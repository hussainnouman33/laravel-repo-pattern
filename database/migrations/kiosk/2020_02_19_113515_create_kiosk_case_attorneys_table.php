<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseAttorneysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_attorneys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->integer('case_id')->unsigned()->index('kiosk_case_attorneys_case_id_foreign');
			$table->integer('attorney_id')->unsigned()->nullable()->index('kiosk_case_attorneys_FK');
			$table->integer('firm_id')->unsigned()->nullable()->index('kiosk_case_attorneys_FK_1');
			$table->integer('firm_location_id')->unsigned()->nullable()->index('kiosk_case_attorneys_FK_2');
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();


            $table->foreign('attorney_id', 'kiosk_case_attorneys_FK')->references('id')->on('attorney')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('firm_id', 'kiosk_case_attorneys_FK_1')->references('id')->on('firm')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('firm_location_id', 'kiosk_case_attorneys_FK_2')->references('id')->on('firm_locations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('case_id')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('CASCADE');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_attorneys');
	}

}
