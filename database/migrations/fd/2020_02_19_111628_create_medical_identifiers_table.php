<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalIdentifiersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medical_identifiers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable()->index('medical_identifiers_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->string('clinic_name', 191)->nullable();
			$table->string('npi', 191)->nullable();
			$table->string('rating', 191)->nullable();
			$table->integer('medical_credentials')->nullable()->default(0)->comment('1=Verified,0=Not Verified');
			$table->string('registration_number', 191)->nullable();
			$table->date('registration_expiration_date')->nullable();
			$table->string('dea_number', 191)->nullable();
			$table->date('dea_expiration_date')->nullable();
			$table->date('dea_issue_date')->nullable();
			$table->integer('billing_title_id')->unsigned()->nullable();
			$table->integer('billing_employment_type_id')->unsigned()->nullable();
			$table->string('other_employment_type', 191)->nullable();
			$table->string('nadean_number', 191)->nullable();
			$table->string('upin', 191)->nullable();
			$table->string('wcb_authorization', 191)->nullable();
			$table->string('wcb_rating_code', 191)->nullable();
			$table->date('wcb_date_of_issue')->nullable();
			$table->string('hospital_privileges', 191)->nullable();
			$table->timestamps();
			$table->integer('updated_by')->unsigned()->nullable()->index('medical_identifiers_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('created_by')->unsigned()->nullable()->index('medical_identifiers_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->softDeletes();
			$table->boolean('wcb_auth')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medical_identifiers');
	}

}
