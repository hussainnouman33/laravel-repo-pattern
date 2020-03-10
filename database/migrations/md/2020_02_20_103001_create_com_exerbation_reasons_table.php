<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComExerbationReasonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_exerbation_reasons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('painExcerbationId')->unsigned()->index('com_exerbation_reasons_painexcerbationid_foreign');
			$table->integer('compPainExrId')->unsigned()->index('com_exerbation_reasons_comppainexrid_foreign');
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
		Schema::drop('com_exerbation_reasons');
	}

}
