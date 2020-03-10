<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillingAdjustersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billing_adjusters', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 50)->nullable();
			$table->string('middle_name', 50)->nullable();
			$table->string('last_name', 50)->nullable();
			$table->string('phone_no')->nullable();
			$table->string('cell_no')->nullable();
			$table->string('ext', 11)->nullable();
			$table->string('fax')->nullable();
			$table->string('email')->nullable();
			$table->string('street_address')->nullable();
			$table->string('apartment_suite', 50)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('state', 50)->nullable();
			$table->string('zip', 11)->nullable();
			$table->string('comments')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('billing_adjusters');
	}

}
