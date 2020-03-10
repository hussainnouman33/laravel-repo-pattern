<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanOfCareDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_of_care_devices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('comments', 65535)->nullable();
			$table->integer('deviceId')->unsigned()->index('plan_of_care_devices_deviceid_foreign');
			$table->integer('planOfCareId')->unsigned()->index('plan_of_care_devices_planofcareid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->boolean('checked')->default(0);
			$table->string('length', 100)->nullable();
			$table->string('other_lenght_comment', 191)->nullable();
			$table->boolean('use_in_control_unit')->default(0);
			$table->string('settings', 512)->nullable();
			$table->string('frequency', 100)->nullable();
			$table->string('pressure', 100)->nullable();
			$table->string('time', 100)->nullable();
			$table->string('selected_location', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plan_of_care_devices');
	}

}
