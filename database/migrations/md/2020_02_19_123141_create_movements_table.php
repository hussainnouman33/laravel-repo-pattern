<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('movement', 50)->nullable();
			$table->integer('normalROM')->nullable();
			$table->integer('bodyPartId')->unsigned()->index('movements_bodypartid_foreign');
			$table->integer('body_part_id')->unsigned()->nullable()->index('movements_body_part_id_foreign');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('movements_created_by_foreign');
			$table->integer('updated_by')->unsigned()->nullable()->index('movements_updated_by_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movements');
	}

}
