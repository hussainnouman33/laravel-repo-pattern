<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKioskPatientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiosk_patient', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('key')->nullable();
			$table->string('first_name', 191)->nullable();
			$table->string('middle_name', 191)->nullable();
			$table->string('last_name', 191)->nullable();
			$table->string('dob', 100)->nullable();
			$table->enum('gender', array('male','female','indeterminate'))->comment('M = Male, F = Female, X = Indeterminate');
			$table->integer('age')->nullable();
			$table->string('ssn', 50)->nullable();
			$table->string('cell_phone', 100)->nullable();
			$table->string('home_phone', 100)->nullable();
			$table->string('work_phone', 100)->nullable();
			$table->integer('height_ft')->nullable();
			$table->integer('height_in')->nullable();
			$table->float('weight_lbs')->nullable();
			$table->float('weight_kg')->nullable();
			$table->enum('meritial_status', array('single','married','divorce'))->comment('S = Single, M = Merried, D = Divorce');
			$table->string('profile_avatar', 191)->nullable();
			$table->boolean('need_translator')->nullable();
			$table->string('language', 191)->nullable();
			$table->enum('is_pregnant', array('yes','no','not_sure'))->nullable();
			$table->boolean('is_law_enforcement_agent')->nullable()->default(0);
			$table->integer('created_by')->unsigned()->nullable();
			$table->integer('updated_by')->unsigned()->nullable();
			$table->timestamps();
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
		Schema::drop('kiosk_patient');
	}

}
