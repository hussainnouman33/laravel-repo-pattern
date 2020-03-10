<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMdeicalHistoryDiseasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mdeical_history_diseases', function(Blueprint $table)
		{
			$table->foreign('diseasesId')->references('id')->on('diseases')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('pastMedicalHistoryId')->references('id')->on('past_medical_history')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mdeical_history_diseases', function(Blueprint $table)
		{
			$table->dropForeign('mdeical_history_diseases_diseasesid_foreign');
			$table->dropForeign('mdeical_history_diseases_pastmedicalhistoryid_foreign');
		});
	}

}
