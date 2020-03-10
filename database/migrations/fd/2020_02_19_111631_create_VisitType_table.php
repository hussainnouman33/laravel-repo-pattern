<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVisitTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visittype', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('type', 36);
			$table->dateTime('deletedAt')->nullable();
			$table->boolean('isDeleted')->nullable();
			$table->timestamps();
			$table->integer('created_by')->unsigned()->nullable()->index('visittype_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('visittype_updated_by_foreign');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->softDeletes();
			$table->string('comments')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('VisitType');
	}

}
