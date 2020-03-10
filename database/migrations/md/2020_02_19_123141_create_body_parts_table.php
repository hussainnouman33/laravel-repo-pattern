<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodyPartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('body_parts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->nullable();
			$table->string('bodyPartKey', 50)->nullable();
			$table->string('type', 50)->nullable();
			$table->integer('location')->nullable();
			$table->boolean('has_comments')->default(0);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('body_parts_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('body_parts_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('body_parts');
	}

}
