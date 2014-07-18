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

Route::get('/', function()
{
	//return View::make('hello');

	$user = Auth::user();

	// // add a friend
	// $user->skills()->attach(6);

	// // remove a friend
	// $user->skills()->detach(6);

	return $user->skills;


});

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

Route::get('/test', 'UsersController@showTest');

Route::get('/', 'UsersController@showLanding');

Route::resource('jobs', 'JobsController');

Route::resource('schools', 'SchoolsController');

Route::resource('connections', 'ConnectionsController');




