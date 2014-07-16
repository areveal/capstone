<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function($table)
		{
		    $table->integer('from_user')->unsigned();
		    $table->foreign('from_user')->references('id')->on('users');
		    $table->integer('to_user')->unsigned();
		    $table->foreign('to_user')->references('id')->on('users');
		    $table->string('subject', 100);
		    $table->text('body');  
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
		Schema::drop('messages');
	}

}
