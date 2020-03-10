<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseBodyPartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_body_parts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('case_id')->unsigned()->index('kiosk_case_body_parts_fk_1');
			$table->integer('body_part_id')->index('kiosk_case_body_parts_fk');
			$table->integer('level');
			$table->string('other_body_part_name')->nullable();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->softDeletes();

            $table->foreign('body_part_id', 'kiosk_case_body_parts_fk')->references('id')->on('kiosk_body_parts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('case_id', 'kiosk_case_body_parts_fk_1')->references('id')->on('kiosk_cases')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_body_parts');
	}

}
