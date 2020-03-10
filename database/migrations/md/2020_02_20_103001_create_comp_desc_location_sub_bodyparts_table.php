<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompDescLocationSubBodypartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comp_desc_location_sub_bodyparts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 512)->nullable();
			$table->boolean('checked')->default(0);
			$table->integer('compDescLocationId')->unsigned()->index('comp_desc_location_sub_bodyparts_compdesclocationid_foreign');
			$table->integer('subBodyPartId')->unsigned()->index('comp_desc_location_sub_bodyparts_subbodypartid_foreign');
			$table->softDeletes();
			$table->timestamps();
			$table->string('issue', 512)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comp_desc_location_sub_bodyparts');
	}

}
