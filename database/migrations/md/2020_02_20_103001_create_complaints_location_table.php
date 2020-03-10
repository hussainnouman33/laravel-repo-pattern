<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintsLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complaints_location', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('painScale')->unsigned()->nullable();
			$table->enum('painStyle', array('constant','intermittent'))->nullable()->default('constant');
			$table->text('comments', 65535)->nullable();
			$table->boolean('checked')->default(0);
			$table->string('location', 50)->nullable();
			$table->integer('currentCompId')->unsigned()->index('complaints_location_currentcompid_foreign');
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
		Schema::drop('complaints_location');
	}

}
