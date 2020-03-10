<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodyPartFeelingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('body_part_feeling', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('bodyPartId')->unsigned()->index('body_part_feeling_bodypartid_foreign');
			$table->string('feeling', 50)->nullable();
			$table->softDeletes();
			$table->timestamps();
			$table->integer('body_part_id')->unsigned()->nullable()->index('body_part_feeling_body_part_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('body_part_feeling');
	}

}
