<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBodyPartFeelingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('body_part_feeling', function(Blueprint $table)
		{
			$table->foreign('body_part_id')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('bodyPartId')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('body_part_feeling', function(Blueprint $table)
		{
			$table->dropForeign('body_part_feeling_body_part_id_foreign');
			$table->dropForeign('body_part_feeling_bodypartid_foreign');
		});
	}

}
