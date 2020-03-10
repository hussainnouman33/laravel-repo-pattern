<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanfofcareOrientedbpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planfofcare_orientedbp', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('orientation', 50)->nullable();
			$table->boolean('checked')->default(0);
			$table->integer('bodyPartId')->unsigned()->index('planfofcare_orientedbp_bodypartid_foreign');
			$table->integer('planOfCareId')->unsigned()->index('planfofcare_orientedbp_planofcareid_foreign');
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
		Schema::drop('planfofcare_orientedbp');
	}

}
