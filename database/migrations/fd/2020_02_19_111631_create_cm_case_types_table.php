<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmCaseTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cm_case_types', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('type', 36);
			$table->string('description', 100)->nullable();
			$table->dateTime('deletedAt')->nullable();
			$table->boolean('isDeleted')->nullable();
			$table->timestamps();
			$table->integer('position')->nullable();


			$table->integer('created_by')->unsigned()->nullable()->index('cm_case_types_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');




            $table->integer('updated_by')->unsigned()->nullable()->index('cm_case_types_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');



            $table->softDeletes();
			$table->integer('remainder_days')->nullable();
			$table->string('comments')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cm_case_types');
	}

}
