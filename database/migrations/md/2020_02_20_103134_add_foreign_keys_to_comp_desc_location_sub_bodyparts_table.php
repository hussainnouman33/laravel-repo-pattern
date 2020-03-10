<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompDescLocationSubBodypartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comp_desc_location_sub_bodyparts', function(Blueprint $table)
		{
			$table->foreign('compDescLocationId')->references('id')->on('comp_desc_location')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('subBodyPartId')->references('id')->on('sub_body_parts')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comp_desc_location_sub_bodyparts', function(Blueprint $table)
		{
			$table->dropForeign('comp_desc_location_sub_bodyparts_compdesclocationid_foreign');
			$table->dropForeign('comp_desc_location_sub_bodyparts_subbodypartid_foreign');
		});
	}

}
