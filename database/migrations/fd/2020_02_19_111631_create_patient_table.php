<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->string('first_name', 20);
			$table->string('middle_name', 20)->nullable();
			$table->string('last_name', 20);
			$table->string('social_security', 11);
			$table->date('dob')->nullable();
			$table->boolean('age')->nullable();
			$table->enum('gender', array('male','female','x'))->nullable();
			$table->string('height')->nullable();
			$table->float('weight')->nullable();
			$table->enum('marital_status', array('single','married','widowed','divorced'))->nullable();
			$table->string('URI', 191)->nullable();
			$table->enum('status', array('checkedin','offline'))->nullable();
			$table->timestamps();

			$table->integer('created_by')->unsigned()->nullable()->index('patient_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('patient_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->string('height_inches', 191)->nullable();
			$table->string('no_show_ups', 191);
			$table->softDeletes();
			$table->boolean('isDeleted')->nullable();
			$table->dateTime('deletedAt')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patient');
	}

}
