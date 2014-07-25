<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZipcodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zipcodes', function($table)
		{
		    $table->string('zip', 5);
		    $table->float('lat');
		    $table->float('lon');
		    $table->string('city', 30);
		    $table->string('state', 30);
		    $table->string('state_abbrev',2);  
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
		Schema::drop('zipcodes');
	}

}
