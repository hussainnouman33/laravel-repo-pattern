<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJwtTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jwt_tokens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->text('token', 65535);
			$table->timestamp('login_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('medium', 191)->nullable();
			$table->dateTime('expire_date')->nullable();
			$table->string('ip_address', 191)->nullable();
			$table->string('location', 191)->nullable();
			$table->integer('status');
			$table->timestamps();

            $table->integer('created_by')->nullable();
//            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->integer('updated_by')->nullable();
//            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jwt_tokens');
	}

}
