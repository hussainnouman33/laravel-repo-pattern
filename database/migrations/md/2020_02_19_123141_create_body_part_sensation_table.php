<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodyPartSensationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('body_part_sensation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sensation', 50)->nullable();
			$table->integer('bodyPartId')->unsigned()->index('body_part_sensation_bodypartid_foreign');
			$table->integer('body_part_id')->unsigned()->nullable()->index('body_part_sensation_body_part_id_foreign');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('body_part_sensation_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('body_part_sensation_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('body_part_sensation');
	}

}
