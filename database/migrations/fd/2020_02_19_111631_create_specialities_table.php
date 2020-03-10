<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecialitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specialities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->nullable();
			$table->string('description', 250)->nullable();
			$table->integer('time_slot')->nullable();
			$table->timestamps();
			$table->integer('created_by')->unsigned()->nullable()->index('specialities_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('specialities_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('over_booking')->nullable();
			$table->boolean('has_app')->nullable();
			$table->string('speciality_key', 20)->nullable();
			$table->softDeletes();
			$table->string('comments', 191)->nullable();
			$table->string('default_name', 191)->nullable();
			$table->boolean('is_defualt')->default(0);
			$table->boolean('is_available')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('specialities');
	}

}
