<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('motion', function(Blueprint $table)
		{
			$table->foreign('body_part_id')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('bodyPartId')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('motion', function(Blueprint $table)
		{
			$table->dropForeign('motion_body_part_id_foreign');
			$table->dropForeign('motion_bodypartid_foreign');
			$table->dropForeign('motion_created_by_foreign');
			$table->dropForeign('motion_updated_by_foreign');
		});
	}

}
