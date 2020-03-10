<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConditonStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conditon_state', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('state', 100)->nullable();
			$table->integer('bodyPartConditionId')->unsigned()->index('conditon_state_bodypartconditionid_foreign');
			$table->integer('body_part_condition_id')->unsigned()->nullable()->index('conditon_state_body_part_condition_id_foreign');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('conditon_state_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('conditon_state_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conditon_state');
	}

}
