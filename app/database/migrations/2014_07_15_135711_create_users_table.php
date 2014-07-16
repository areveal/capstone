<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('first_name', 50);
		    $table->string('last_name', 50);
		    $table->string('email',200)->unique();
		    $table->string('img_path', 200)->nullable();
		    $table->string('password',100);
		    $table->string('remember_token',100)->nullable;
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
		Schema::drop('users');
	}

}