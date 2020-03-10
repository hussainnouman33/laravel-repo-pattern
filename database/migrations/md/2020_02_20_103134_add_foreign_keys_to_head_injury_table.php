<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHeadInjuryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('head_injury', function(Blueprint $table)
		{
			$table->foreign('complaintId')->references('id')->on('complaints')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('head_injury', function(Blueprint $table)
		{
			$table->dropForeign('head_injury_complaintid_foreign');
		});
	}

}
