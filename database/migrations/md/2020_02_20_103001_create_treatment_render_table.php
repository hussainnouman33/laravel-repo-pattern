<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentRenderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('treatment_render', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('comments', 100)->nullable();
			$table->integer('sessionId')->unsigned()->index('treatment_render_sessionid_foreign');
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('treatment_render_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('treatment_render_updated_by_foreign');
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
		Schema::drop('treatment_render');
	}

}
