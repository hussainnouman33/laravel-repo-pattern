<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovementDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movement_detail', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('testResult', 10)->nullable();
			$table->string('tenderness', 10)->nullable();
			$table->string('consistency', 50)->nullable();
			$table->string('with', 10)->nullable();
			$table->string('painLevel', 10)->nullable();
			$table->string('conjunction', 10)->nullable();
			$table->text('comment', 65535)->nullable();
			$table->string('painInJoint', 10)->nullable();
			$table->string('painAcrossShoulder', 10)->nullable();
			$table->string('limitationOfMovement', 10)->nullable();
			$table->integer('bodyPartId')->unsigned()->index('movement_detail_bodypartid_foreign');
			$table->integer('PhysicalExmId')->unsigned()->index('movement_detail_physicalexmid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->string('orientation', 191)->nullable();
			$table->string('position')->nullable();
			$table->boolean('normal_range')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movement_detail');
	}

}
