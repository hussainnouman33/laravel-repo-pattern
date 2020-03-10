<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModalitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modalities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('modalities_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('modalities_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modalities');
	}

}
