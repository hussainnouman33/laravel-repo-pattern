<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodyPartMovementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('body_part_movements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('orientation', 50)->nullable();
			$table->integer('measuredROM')->nullable();
			$table->integer('leftMeasuredROM')->nullable();
			$table->integer('rightMeasuredROM')->nullable();
			$table->integer('movementId')->unsigned()->index('body_part_movements_movementid_foreign');
			$table->integer('movementDetailId')->unsigned()->index('body_part_movements_movementdetailid_foreign');
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
		Schema::drop('body_part_movements');
	}

}
