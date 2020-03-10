<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComExerbationReasonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('com_exerbation_reasons', function(Blueprint $table)
		{
			$table->foreign('compPainExrId')->references('id')->on('complaint_pain_exerbation')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('painExcerbationId')->references('id')->on('pain_exerbation')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('com_exerbation_reasons', function(Blueprint $table)
		{
			$table->dropForeign('com_exerbation_reasons_comppainexrid_foreign');
			$table->dropForeign('com_exerbation_reasons_painexcerbationid_foreign');
		});
	}

}
