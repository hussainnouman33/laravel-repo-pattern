<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdAllergiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('md_allergies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('allergy', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('md_allergies_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('md_allergies_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('md_allergies');
	}

}
