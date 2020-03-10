<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlanOfCareDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('plan_of_care_devices', function(Blueprint $table)
		{
			$table->foreign('deviceId')->references('id')->on('devices')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('planOfCareId')->references('id')->on('plan_of_care')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('plan_of_care_devices', function(Blueprint $table)
		{
			$table->dropForeign('plan_of_care_devices_deviceid_foreign');
			$table->dropForeign('plan_of_care_devices_planofcareid_foreign');
		});
	}

}
