<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillingAdjusterInsurancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billing_adjuster_insurances', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('adjuster_id')->index('adjuster_id');
            $table->integer('insurance_id')->index('insurance_id');

            $table->foreign('adjuster_id', 'billing_adjuster_insurances_ibfk_1')->references('id')->on('billing_adjusters')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('insurance_id', 'billing_adjuster_insurances_ibfk_2')->references('id')->on('billing_insurances')->onUpdate('RESTRICT')->onDelete('CASCADE');

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
		Schema::drop('billing_adjuster_insurances');
	}

}
