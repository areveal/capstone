<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('education', function($table)
		{
		    $table->increments('id');
		    $table->string('college', 200);
		    $table->string('year_began', 4);
		    $table->string('year_completed', 4);
		    $table->string('major', 150);
		    $table->string('GPA', 10);
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
		Schema::table('education', function($table)
		{
		    $table->dropForeign('education_user_id_foreign');
		});
		Schema::drop('education');	
	}

}
