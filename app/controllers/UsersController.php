<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//this will return a page to search through all users
		return View::make('users.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//this is our signup page
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// store function
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails())
		{
			Session::flash('errorMessage','We could not create a new profile. Please see errors below.');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$user = new User();


			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('name');		
			$user->email = Input::get('email');
			$user->password = Input::get('password');

			$confirmPassword = Input::get('confirmPassword');

			if($confirmPassword == $user->password)
			{
				$user->save();
				Session::flash('successMessage', 'You have successfully created an account.');
	    		return Redirect::action('HomeController@showSignup')->withInput();
			}
			else 
			{
				Session::flash('errorMessage', 'Your password and your confirmation password did not match.');
	    		return Redirect::back()->withInput();
			}
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// this is our user's home page
		$user = User::findOrfail($id);

		return View::make('users.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// this is an edit page for users information
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// this updates the user
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// this deletes the user
	}


}
