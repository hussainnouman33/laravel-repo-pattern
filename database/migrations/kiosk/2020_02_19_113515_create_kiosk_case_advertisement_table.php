<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseAdvertisementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_advertisement', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('case_id')->unsigned()->index('kiosk_case_advertisement_FK');
			$table->string('other_advertisement', 200)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->integer('referred_by_id')->nullable()->index('kiosk_case_advertisement_FK_2');
			$table->integer('advertisement_id')->nullable()->index('kiosk_case_advertisement_FK_1');

            $table->foreign('case_id', 'kiosk_case_advertisement_FK')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('advertisement_id', 'kiosk_case_advertisement_FK_1')->references('id')->on('kiosk_advertisement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('referred_by_id', 'kiosk_case_advertisement_FK_2')->references('id')->on('kiosk_refered_by')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_advertisement');
	}

}
