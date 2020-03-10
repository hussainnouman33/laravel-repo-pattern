<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBodyPartExaminationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('body_part_examination', function(Blueprint $table)
		{
			$table->foreign('body_part_id')->references('id')->on('body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('physicalExamId')->references('id')->on('physical_examination')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('body_part_examination', function(Blueprint $table)
		{
			$table->dropForeign('body_part_examination_body_part_id_foreign');
			$table->dropForeign('body_part_examination_physicalexamid_foreign');
		});
	}

}
