<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('access_tokens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191)->nullable();
			$table->string('description', 191)->nullable();
			$table->string('access_token', 191)->nullable();
			$table->timestamps();
			$table->softDeletes();

			$table->integer('created_by')->unsigned()->nullable()->index('access_token_created_by_foreign');
			$table->foreign('created_by', 'access_token_created_by_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->unsigned()->nullable()->index('access_token_updated_by_foreign');
            $table->foreign('updated_by', 'access_token_updated_by_foreign')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

			$table->boolean('status')->nullable()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('access_tokens');
	}

}
