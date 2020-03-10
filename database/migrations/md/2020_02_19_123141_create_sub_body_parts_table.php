<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubBodyPartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_body_parts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->nullable();
			$table->integer('bodyPartId')->unsigned()->index('sub_body_parts_bodypartid_foreign');
			$table->integer('body_part_id')->unsigned()->nullable()->index('sub_body_parts_body_part_id_foreign');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('sub_body_parts_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('sub_body_parts_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sub_body_parts');
	}

}
