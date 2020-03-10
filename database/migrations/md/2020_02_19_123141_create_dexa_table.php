<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDexaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dexa', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('section', 100)->nullable();
			$table->string('name', 100)->nullable();
			$table->integer('parentId')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('dexa_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('dexa_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dexa');
	}

}
