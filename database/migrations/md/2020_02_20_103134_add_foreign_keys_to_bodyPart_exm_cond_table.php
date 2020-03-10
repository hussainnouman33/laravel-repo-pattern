<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBodyPartExmCondTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bodyPart_exm_cond', function(Blueprint $table)
		{
			$table->foreign('condStateId', 'bodyPart_exm_cond_ibfk_1')->references('id')->on('conditon_state')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('bodyPartConditionId')->references('id')->on('body_part_condition')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('bodyPartExmId')->references('id')->on('body_part_examination')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bodyPart_exm_cond', function(Blueprint $table)
		{
			$table->dropForeign('bodyPart_exm_cond_ibfk_1');
			$table->dropForeign('bodypart_exm_cond_bodypartconditionid_foreign');
			$table->dropForeign('bodypart_exm_cond_bodypartexmid_foreign');
		});
	}

}
