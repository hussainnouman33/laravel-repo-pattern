<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCasePracticesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_practices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->integer('case_id')->unsigned()->nullable()->index('kiosk_case_practices_case_id_foreign');
			$table->integer('practice_id')->unsigned()->nullable()->index('kiosk_case_practices_practice_id_foreign');
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();

            $table->foreign('case_id')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('practice_id')->references('id')->on('kiosk_practices')->onUpdate('RESTRICT')->onDelete('CASCADE');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_practices');
	}

}
