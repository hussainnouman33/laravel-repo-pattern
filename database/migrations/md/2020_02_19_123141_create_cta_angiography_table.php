<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCtaAngiographyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cta_angiography', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('section', 100)->nullable();
			$table->string('name', 100)->nullable();
			$table->integer('with')->nullable();
			$table->integer('withOut')->nullable();
			$table->integer('parentId')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('cta_angiography_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('cta_angiography_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cta_angiography');
	}

}
