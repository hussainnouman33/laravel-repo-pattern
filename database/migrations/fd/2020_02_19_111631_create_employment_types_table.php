<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmploymentTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employment_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191)->nullable();
			$table->string('description', 191)->nullable();
			$table->timestamps();



			$table->integer('created_by')->unsigned()->nullable()->index('employment_type_created_by_foreign');
            $table->foreign('created_by', 'employment_type_created_by_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');



            $table->integer('updated_by')->unsigned()->nullable()->index('employment_type_updated_by_foreign');
            $table->foreign('updated_by', 'employment_type_updated_by_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');



            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employment_types');
	}

}
