<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttorneyFirmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attorney_firm', function(Blueprint $table)
		{
			$table->increments('id');


            $table->integer('attorney_id')->unsigned()->index('attorney_firm_attorney_id_foreign');
            $table->foreign('attorney_id')->references('id')->on('attorney')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('firm_id')->unsigned()->index('attorney_firm_firm_id_foreign');
            $table->foreign('firm_id')->references('id')->on('firm')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->nullable()->index('attorney_firm_created_by_foreign');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('attorney_firm_updated_by_foreign');
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
		Schema::drop('attorney_firm');
	}

}
