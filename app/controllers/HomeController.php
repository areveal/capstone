<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	//show the login screen
	public function showLogin()
	{
		return View::make('users.login');
	}
	//enter the email and password to login
	public function doLogin()
	{

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		    return Redirect::action('UsersController@show', Auth::user()->id);
		}

		else
		{
			//error message displayed if user name or password invalid
			Session::flash('errorMessage', 'Invalid email or password.');
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function resetPassword()
		{
			//option to reset password
			return Redirect::intended(action('RemindersController'));
		}


	public function logout()
	{
		Auth::logout();
		return Redirect::action('UsersController@showLanding');
	}

	// public function getContacts()
	// {

	// 	//DO uploda file first and handle then read

		
	// 	// return View::action('HomeController@index');
	// 	//import email addresses 
	// 	$contacts = [];

	// 	$handle = fopen($this->filename, 'r');
	// 	while(!feof($handle)) {
	// 		$row = fgetcsv($handle);
	// 		if (is_array($row)) {
	// 	  		$contacts[] = $row;
	// 		}
	// 	}
	// 	fclose($handle);
		// return $contacts;
	
	


}
