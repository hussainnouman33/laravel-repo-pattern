<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMdSpecialityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_md_speciality', function(Blueprint $table)
		{
			$table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('_md_speciality', function(Blueprint $table)
		{
			$table->dropForeign('_md_speciality_created_by_foreign');
			$table->dropForeign('_md_speciality_updated_by_foreign');
		});
	}

}
