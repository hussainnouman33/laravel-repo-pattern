<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompDescLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comp_desc_location', function(Blueprint $table)
		{
			$table->foreign('compDescId')->references('id')->on('patient_complaint_description')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comp_desc_location', function(Blueprint $table)
		{
			$table->dropForeign('comp_desc_location_compdescid_foreign');
		});
	}

}
