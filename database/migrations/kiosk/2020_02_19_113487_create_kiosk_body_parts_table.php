<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskBodyPartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_body_parts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->integer('position')->nullable();
			$table->integer('is_deleted');
			$table->softDeletes();
			$table->timestamps();
			$table->integer('pain_level')->nullable()->default(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiosk_body_parts');
	}

}
