<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHeadInjuryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('head_injury', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('headInjury')->nullable();
			$table->text('headInjuryComments', 65535)->nullable();
			$table->integer('complaintId')->unsigned()->index('head_injury_complaintid_foreign');
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('head_injury');
	}

}
