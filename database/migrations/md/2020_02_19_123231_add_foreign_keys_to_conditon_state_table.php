<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConditonStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('conditon_state', function(Blueprint $table)
		{
			$table->foreign('body_part_condition_id')->references('id')->on('body_part_condition')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('bodyPartConditionId')->references('id')->on('body_part_condition')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('conditon_state', function(Blueprint $table)
		{
			$table->dropForeign('conditon_state_body_part_condition_id_foreign');
			$table->dropForeign('conditon_state_bodypartconditionid_foreign');
			$table->dropForeign('conditon_state_created_by_foreign');
			$table->dropForeign('conditon_state_updated_by_foreign');
		});
	}

}
