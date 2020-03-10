<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodyPartExaminationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('body_part_examination', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('comment', 65535)->nullable();
			$table->integer('physicalExamId')->unsigned()->index('body_part_examination_physicalexamid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->integer('body_part_id')->unsigned()->index('body_part_examination_body_part_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('body_part_examination');
	}

}
