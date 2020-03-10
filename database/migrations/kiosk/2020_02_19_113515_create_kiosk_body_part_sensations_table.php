<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskBodyPartSensationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_body_part_sensations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('sensation_id')->index('kiosk_body_part_sensations_fk');
			$table->integer('body_part_id')->index('kiosk_body_part_sensations_fk_1');
			$table->integer('is_deleted')->default(0);
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_body_part_sensations');
	}

}
