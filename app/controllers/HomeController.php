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

	public function showSignup()
	{
		return View::make('pages.signup');
	}

	public function doSignup()
	{
		$user = new User();
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->confirmPassword = Input::get('confirmPassword');

		if (Auth::attempt(array('first_name' => $first_name,'last_name' => $last_name, 'email' => $email, 'password' => $password, 'confirmPassword' => $confirmPassword )))
		{
    		return Redirect::intended(action('HomeController@showSignup'));
		}
		else
		{
			Session::flash('errorMessage', 'Please complete all fields.');
    		return Redirect::action('HomeController@showSignup')->withInput();
		}
	}

	//show the login screen
	public function showLogin()
	{
		return View::make('login');
	}
	//enter the email and password to login
	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		$reset = Input::get('reset_password');
		//login successfully
		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			return Redirect::intended(action('UsersController@index'));
		}
		// elseif
		// {
		// 	//error message displayed if user name or password invalid
		// 	Session::flash('errorMessage', 'Invalid email or password.');
		// 	return Redirect::action('HomeController@showLogin');
		// }
		else
		{
			//option to reset password
			return Redirect::intended(action('RemindersController'));
		}	


	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

}
