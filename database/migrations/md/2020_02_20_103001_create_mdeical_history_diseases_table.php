<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdeicalHistoryDiseasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mdeical_history_diseases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('diseasesId')->unsigned()->index('mdeical_history_diseases_diseasesid_foreign');
			$table->integer('pastMedicalHistoryId')->unsigned()->index('mdeical_history_diseases_pastmedicalhistoryid_foreign');
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
		Schema::drop('mdeical_history_diseases');
	}

}
