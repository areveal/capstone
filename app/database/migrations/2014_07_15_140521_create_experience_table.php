<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experience', function($table)
		{
		    $table->increments('id');
		    $table->string('job_title', 100);
		    $table->string('start_date', 20);
		    $table->string('end_date', 20);
		    $table->string('company', 100);
		    $table->text('description');
		    $table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
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
		Schema::table('experience', function($table)
		{
		    $table->dropForeign('experience_user_id_foreign');
		});
		Schema::drop('experience');
	}

}
