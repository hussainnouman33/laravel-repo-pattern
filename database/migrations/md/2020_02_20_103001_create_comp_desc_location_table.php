<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompDescLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comp_desc_location', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 512)->nullable();
			$table->boolean('checked')->default(0);
			$table->text('comments', 65535)->nullable();
			$table->integer('compDescId')->unsigned()->index('comp_desc_location_compdescid_foreign');
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
		Schema::drop('comp_desc_location');
	}

}
