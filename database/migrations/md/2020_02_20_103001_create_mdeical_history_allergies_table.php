<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdeicalHistoryAllergiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mdeical_history_allergies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('allergyId')->unsigned()->index('mdeical_history_allergies_allergyid_foreign');
			$table->integer('pastMedicalHistoryId')->unsigned()->index('mdeical_history_allergies_pastmedicalhistoryid_foreign');
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
		Schema::drop('mdeical_history_allergies');
	}

}
