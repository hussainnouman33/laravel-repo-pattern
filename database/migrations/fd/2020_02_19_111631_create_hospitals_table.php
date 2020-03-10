<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHospitalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hospitals', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 50);
			$table->string('street_address', 50)->nullable();
			$table->string('apartment', 20)->nullable();
			$table->string('city', 36)->nullable();
			$table->string('state', 50)->nullable();
			$table->string('zip', 20)->nullable();
			$table->string('work_phone', 15)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('fax', 15)->nullable();
			$table->string('lat', 36)->nullable();
			$table->string('long', 36)->nullable();
			$table->softDeletes();
			$table->string('isDeleted')->nullable();
			$table->timestamps();

            $table->integer('created_by')->unsigned()->nullable()->index('hospitals_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');


            $table->integer('updated_by')->unsigned()->nullable()->index('hospitals_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hospitals');
	}

}
