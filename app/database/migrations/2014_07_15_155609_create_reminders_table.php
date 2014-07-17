<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemindersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reminders_reminders', function(Blueprint $table)
		{
			$table->string('email');
			$table->string('token');
			$table->timestamp('created_at');

			$table->primary('token');

			$table->foreign('email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reminders_reminders');
	}

}
