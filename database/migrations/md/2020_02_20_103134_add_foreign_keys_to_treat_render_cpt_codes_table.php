<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTreatRenderCptCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('treat_render_cpt_codes', function(Blueprint $table)
		{
			$table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('treat_render_id')->references('id')->on('treatment_render')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('treat_render_cpt_codes', function(Blueprint $table)
		{
			$table->dropForeign('treat_render_cpt_codes_created_by_foreign');
			$table->dropForeign('treat_render_cpt_codes_treat_render_id_foreign');
			$table->dropForeign('treat_render_cpt_codes_updated_by_foreign');
		});
	}

}
