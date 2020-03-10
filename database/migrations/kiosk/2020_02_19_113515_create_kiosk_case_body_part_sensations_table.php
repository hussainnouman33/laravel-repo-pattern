<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskCaseBodyPartSensationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_case_body_part_sensations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('sensation_id')->nullable()->index('kiosk_case_body_part_sensations_fk');
			$table->integer('case_body_part_id')->index('kiosk_case_body_part_sensations_fk_1');
			$table->string('name')->nullable();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->softDeletes()->default(DB::raw('CURRENT_TIMESTAMP'));


            $table->foreign('sensation_id', 'kiosk_case_body_part_sensations_fk')->references('id')->on('kiosk_sensations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('case_body_part_id', 'kiosk_case_body_part_sensations_fk_1')->references('id')->on('kiosk_case_body_parts')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_case_body_part_sensations');
	}

}
