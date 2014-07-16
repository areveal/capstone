<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('connections', function($table)
		{
		    $table->integer('user_one')->unsigned();
		    $table->foreign('user_one')->references('id')->on('users');
		    $table->integer('user_two')->unsigned();
		    $table->foreign('user_two')->references('id')->on('users');    
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('connections');
	}

}
