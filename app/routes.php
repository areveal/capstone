<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');


Route::controller('forgetpass', 'RemindersController');

//will import email lists
Route::get('/contact', 'HomeController@getContacts');
//show email contacts that have been imported
Route::post('/contact', 'HomeController@getContacts');


//Route for Users table resources
Route::resource('/users', 'UsersController');

//Route for Skills table resources
Route::resource('/skills', 'SkillsController');

Route::get('/', 'UsersController@showLanding');

Route::resource('jobs', 'JobsController');

Route::resource('schools', 'SchoolsController');

Route::resource('connections', 'ConnectionsController');

Route::resource('associations', 'AssociationsController');

Route::get('/test',function() {

	$filename = "/vagrant/sites/final-project.dev/public/skills.txt";

	$filesize = filesize($filename);
    //open file to read
    $read = fopen($filename, 'r');
    //read file into string
    $list_string = fread($read, $filesize);
    //turn string into array
    $skills_array = explode("\n", $list_string);		    

	var_dump($skills_array);


});