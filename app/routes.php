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

	$zip = '78240';
	$displacement = '10';
	$zip_array = DB::select("CALL zip_proximity($zip, $displacement, 'mi')");
	foreach ($zip_array as $zip) {
		$zips[] = $zip->zip;
	}		    

	var_dump($zips);


});