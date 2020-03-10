<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('motion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('hasOrientation')->nullable();
			$table->integer('bodyPartId')->unsigned()->index('motion_bodypartid_foreign');
			$table->integer('body_part_id')->unsigned()->nullable()->index('motion_body_part_id_foreign');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('motion_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('motion_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('motion');
	}

}
