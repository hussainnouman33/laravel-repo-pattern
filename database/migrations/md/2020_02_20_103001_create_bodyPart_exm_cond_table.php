<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodyPartExmCondTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bodyPart_exm_cond', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('bodyPartConditionId')->unsigned()->index('bodypart_exm_cond_bodypartconditionid_foreign');
			$table->integer('bodyPartExmId')->unsigned()->index('bodypart_exm_cond_bodypartexmid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->integer('condStateId')->unsigned()->nullable()->index('condStateId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bodyPart_exm_cond');
	}

}
