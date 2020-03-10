<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComplaintsLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('complaints_location', function(Blueprint $table)
		{
			$table->foreign('currentCompId')->references('id')->on('current_complaint')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('complaints_location', function(Blueprint $table)
		{
			$table->dropForeign('complaints_location_currentcompid_foreign');
		});
	}

}
