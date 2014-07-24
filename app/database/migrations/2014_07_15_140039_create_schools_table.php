<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function($table)
		{
		    $table->increments('id');
		    $table->string('college', 200);
		    $table->date('date_began');
		    $table->date('date_complete', 4);
		    $table->string('major', 150)->nullable();
		    $table->string('gpa', 10)->nullable();
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

		Schema::drop('schools');	
	}

}
