<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalLicenseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medical_license', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('medical_identifier_id')->unsigned()->nullable()->index('medical_license_user_id_foreign');
            $table->foreign('medical_identifier_id')->references('id')->on('medical_identifiers')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->string('medical_license', 191);
			$table->date('medical_license_expiration_date');
			$table->string('state_issuing_the_medical_license', 191)->nullable();
			$table->string('degree_listed_on_the_license', 191)->nullable();
			$table->date('medical_license_issue_date');
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
		Schema::drop('medical_license');
	}

}
