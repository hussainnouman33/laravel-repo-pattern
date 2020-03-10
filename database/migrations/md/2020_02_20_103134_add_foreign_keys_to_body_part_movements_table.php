<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBodyPartMovementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('body_part_movements', function(Blueprint $table)
		{
			$table->foreign('movementDetailId')->references('id')->on('movement_detail')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('movementId')->references('id')->on('movements')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('body_part_movements', function(Blueprint $table)
		{
			$table->dropForeign('body_part_movements_movementdetailid_foreign');
			$table->dropForeign('body_part_movements_movementid_foreign');
		});
	}

}
