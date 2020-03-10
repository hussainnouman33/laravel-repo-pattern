<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMdeicalHistoryAllergiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mdeical_history_allergies', function(Blueprint $table)
		{
			$table->foreign('allergyId')->references('id')->on('md_allergies')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
		Schema::table('mdeical_history_allergies', function(Blueprint $table)
		{
			$table->dropForeign('mdeical_history_allergies_allergyid_foreign');
			$table->dropForeign('mdeical_history_allergies_pastmedicalhistoryid_foreign');
		});
	}

}
