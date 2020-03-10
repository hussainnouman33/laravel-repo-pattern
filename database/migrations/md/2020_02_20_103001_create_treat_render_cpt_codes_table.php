<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatRenderCptCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('treat_render_cpt_codes', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('treat_render_cpt_code_id')->unsigned();
			$table->bigInteger('treat_render_id')->unsigned()->index('treat_render_cpt_codes_treat_render_id_foreign');
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('treat_render_cpt_codes_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('treat_render_cpt_codes_updated_by_foreign');
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
		Schema::drop('treat_render_cpt_codes');
	}

}
