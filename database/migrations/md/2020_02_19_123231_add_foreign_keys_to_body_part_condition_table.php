<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBodyPartConditionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('body_part_condition', function(Blueprint $table)
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
		Schema::table('body_part_condition', function(Blueprint $table)
		{
			$table->dropForeign('body_part_condition_body_part_id_foreign');
			$table->dropForeign('body_part_condition_bodypartid_foreign');
			$table->dropForeign('body_part_condition_created_by_foreign');
			$table->dropForeign('body_part_condition_updated_by_foreign');
		});
	}

}
