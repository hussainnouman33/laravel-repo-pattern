<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdSpecialityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_md_speciality', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parentId')->nullable();
			$table->string('name', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('_md_speciality_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('_md_speciality_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_md_speciality');
	}

}
